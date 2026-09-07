<?php
header('Content-Type: application/json');
require_once __DIR__ . '/../config/env.php';
require_once __DIR__ . '/../config/beds24.php';
require_once __DIR__ . '/../config/mailer.php';

function fail(string $error, int $code = 400): never
{
    http_response_code($code);
    echo json_encode(['ok' => false, 'error' => $error]);
    exit;
}

$input = json_decode(file_get_contents('php://input'), true) ?? $_POST;

$checkin = $input['checkin'] ?? '';
$checkout = $input['checkout'] ?? '';
$guests = max(1, (int) ($input['guests'] ?? 1));
$firstName = trim($input['first_name'] ?? '');
$lastName = trim($input['last_name'] ?? '');
$email = trim($input['email'] ?? '');
$phone = trim($input['phone'] ?? '');
$notes = trim($input['notes'] ?? '');

if (!preg_match('/^\d{4}-\d{2}-\d{2}$/', $checkin) || !preg_match('/^\d{4}-\d{2}-\d{2}$/', $checkout)) {
    fail('Invalid dates.');
}
if ($firstName === '' || $lastName === '' || !filter_var($email, FILTER_VALIDATE_EMAIL) || $phone === '') {
    fail('Please fill in your name, a valid email, and phone number.');
}

$roomId = (int) env('BEDS24_ROOM_ID');
$client = new Beds24Client();

// Re-check availability server-side - never trust the client's earlier check.
$calendar = $client->getRoomCalendar($roomId, $checkin, $checkout);
if (!$calendar['ok']) {
    fail('Could not verify availability. Please try again.', 502);
}

$in = DateTime::createFromFormat('Y-m-d', $checkin);
$out = DateTime::createFromFormat('Y-m-d', $checkout);
$perNight = [];
foreach ($calendar['ranges'] as $range) {
    $cursor = DateTime::createFromFormat('Y-m-d', $range['from']);
    $end = DateTime::createFromFormat('Y-m-d', $range['to']);
    while ($cursor <= $end) {
        $perNight[$cursor->format('Y-m-d')] = $range;
        $cursor->modify('+1 day');
    }
}
$totalPrice = 0;
$cursor = clone $in;
while ($cursor < $out) {
    $date = $cursor->format('Y-m-d');
    $info = $perNight[$date] ?? null;
    if (!$info || (int) ($info['numAvail'] ?? 0) < 1) {
        fail("Sorry, this room is no longer available on $date. Please pick different dates.", 409);
    }
    $totalPrice += (float) ($info['price1'] ?? 0);
    $cursor->modify('+1 day');
}
$bookingNotes = "Payment method: Bank Transfer (awaiting proof of payment). Full payment due: PHP $totalPrice.";
if ($notes !== '') {
    $bookingNotes .= "\nGuest notes: $notes";
}

$booking = $client->createBooking([
    'roomId' => $roomId,
    'status' => 'request',
    'arrival' => $checkin,
    'departure' => $checkout,
    'numAdult' => $guests,
    'firstName' => $firstName,
    'lastName' => $lastName,
    'email' => $email,
    'phone' => $phone,
    'price' => $totalPrice,
    'deposit' => $totalPrice,
    'notes' => $bookingNotes,
]);

if (!$booking['ok']) {
    error_log('Beds24 booking creation failed: ' . $booking['error']);
    fail('We could not create your booking right now. Please contact us on WhatsApp: +' . env('WHATSAPP_NUMBER'), 502);
}

// Best-effort: push an accommodation charge so it shows in Beds24's Charges
// & Payments tab. Never blocks the booking itself if this fails.
if ($booking['id']) {
    $charge = $client->addInvoiceCharge((int) $booking['id'], 'Accommodation', $totalPrice);
    if (!$charge['ok']) {
        error_log('Beds24 invoice charge failed for booking ' . $booking['id'] . ': ' . $charge['error']);
    }
}

$bankName = env('BANK_NAME', '(bank details to follow by email/WhatsApp)');
$bankAccountName = env('BANK_ACCOUNT_NAME', '');
$bankAccountNumber = env('BANK_ACCOUNT_NUMBER', '');
$bankSwift = env('BANK_SWIFT', '');
$reference = $booking['id'] ?? 'pending';
$whatsapp = env('WHATSAPP_NUMBER');

$totalFormatted = number_format($totalPrice, 2);
$firstNameSafe = htmlspecialchars($firstName, ENT_QUOTES, 'UTF-8');
$whatsappLink = 'https://wa.me/' . $whatsapp;

$guestBody = <<<HTML
<!doctype html>
<html>
<body style="margin:0;padding:0;background:#f1e8dc;font-family:'DM Sans',Arial,sans-serif;">
  <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="background:#f1e8dc;padding:32px 16px;">
    <tr>
      <td align="center">
        <table role="presentation" width="560" cellpadding="0" cellspacing="0" style="max-width:560px;width:100%;background:#fbf8f4;border:1px solid rgba(41,35,31,0.14);">
          <tr>
            <td style="padding:36px 40px 24px;text-align:center;border-bottom:1px solid rgba(41,35,31,0.14);">
              <span style="font-family:Georgia,'Times New Roman',serif;font-size:20px;letter-spacing:2px;color:#29231f;">THE RONIN SIARGAO</span>
            </td>
          </tr>
          <tr>
            <td style="padding:32px 40px 8px;">
              <p style="margin:0 0 16px;color:#29231f;font-size:16px;">Hi $firstNameSafe,</p>
              <p style="margin:0 0 24px;color:#6f655d;font-size:15px;line-height:1.6;">Thanks for requesting a stay at The Ronin Siargao! Here's a summary of your request.</p>
            </td>
          </tr>
          <tr>
            <td style="padding:0 40px;">
              <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="border:1px solid rgba(41,35,31,0.14);">
                <tr>
                  <td style="padding:14px 18px;color:#6f655d;font-size:13px;border-bottom:1px solid rgba(41,35,31,0.14);">Check-in</td>
                  <td style="padding:14px 18px;color:#29231f;font-size:13px;font-weight:600;text-align:right;border-bottom:1px solid rgba(41,35,31,0.14);">$checkin</td>
                </tr>
                <tr>
                  <td style="padding:14px 18px;color:#6f655d;font-size:13px;border-bottom:1px solid rgba(41,35,31,0.14);">Check-out</td>
                  <td style="padding:14px 18px;color:#29231f;font-size:13px;font-weight:600;text-align:right;border-bottom:1px solid rgba(41,35,31,0.14);">$checkout</td>
                </tr>
                <tr>
                  <td style="padding:14px 18px;color:#6f655d;font-size:13px;border-bottom:1px solid rgba(41,35,31,0.14);">Guests</td>
                  <td style="padding:14px 18px;color:#29231f;font-size:13px;font-weight:600;text-align:right;border-bottom:1px solid rgba(41,35,31,0.14);">$guests</td>
                </tr>
                <tr>
                  <td style="padding:14px 18px;color:#6f655d;font-size:13px;border-bottom:1px solid rgba(41,35,31,0.14);">Booking reference</td>
                  <td style="padding:14px 18px;color:#29231f;font-size:13px;font-weight:600;text-align:right;border-bottom:1px solid rgba(41,35,31,0.14);">$reference</td>
                </tr>
                <tr>
                  <td style="padding:14px 18px;color:#29231f;font-size:14px;font-weight:600;">Total</td>
                  <td style="padding:14px 18px;color:#ae704c;font-size:16px;font-weight:700;text-align:right;">PHP $totalFormatted</td>
                </tr>
              </table>
            </td>
          </tr>
          <tr>
            <td style="padding:24px 40px 0;">
              <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="background:#f1e8dc;border-left:3px solid #ae704c;">
                <tr>
                  <td style="padding:18px 22px;">
                    <p style="margin:0 0 12px;color:#29231f;font-size:14px;font-weight:600;">Full payment is required to confirm your reservation</p>
                    <p style="margin:0 0 14px;color:#29231f;font-size:14px;">Please send <strong>PHP $totalFormatted</strong> via bank transfer:</p>
                    <table role="presentation" cellpadding="0" cellspacing="0" style="font-size:13px;color:#6f655d;">
                      <tr><td style="padding:2px 0;">Bank</td><td style="padding:2px 0 2px 10px;color:#29231f;font-weight:600;">$bankName</td></tr>
                      <tr><td style="padding:2px 0;">Account name</td><td style="padding:2px 0 2px 10px;color:#29231f;font-weight:600;">$bankAccountName</td></tr>
                      <tr><td style="padding:2px 0;">Account number</td><td style="padding:2px 0 2px 10px;color:#29231f;font-weight:600;">$bankAccountNumber</td></tr>
                      <tr><td style="padding:2px 0;">SWIFT</td><td style="padding:2px 0 2px 10px;color:#29231f;font-weight:600;">$bankSwift</td></tr>
                    </table>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
          <tr>
            <td style="padding:28px 40px 8px;">
              <p style="margin:0 0 20px;color:#6f655d;font-size:14px;line-height:1.6;">Once we receive your transfer we'll confirm your booking by email. If you have questions, message us on WhatsApp.</p>
              <table role="presentation" cellpadding="0" cellspacing="0">
                <tr>
                  <td style="background:#29231f;">
                    <a href="$whatsappLink" style="display:inline-block;padding:12px 26px;color:#fbf8f4;font-size:14px;font-weight:600;text-decoration:none;">Message us on WhatsApp</a>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
          <tr>
            <td style="padding:32px 40px 36px;border-top:1px solid rgba(41,35,31,0.14);margin-top:24px;">
              <p style="margin:24px 0 0;color:#6f655d;font-size:13px;">- The Ronin Siargao</p>
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</body>
</html>
HTML;

send_mail($email, 'Your booking request - The Ronin Siargao', $guestBody, null, true);

$notifyEmail = env('NOTIFY_EMAIL');
if ($notifyEmail) {
    $ownerBody = "New booking request (Beds24 ref: $reference)\n\n"
        . "Guest: $firstName $lastName\nEmail: $email\nPhone: $phone\n"
        . "Check-in: $checkin\nCheck-out: $checkout\nGuests: $guests\n"
        . "Total: PHP $totalPrice (full payment required)\n"
        . ($notes !== '' ? "Notes: $notes\n" : '');
    send_mail($notifyEmail, 'New booking request - The Ronin Siargao', $ownerBody, $email);
}

echo json_encode([
    'ok' => true,
    'reference' => $reference,
    'totalPrice' => $totalPrice,
    'amountDue' => $totalPrice,
]);
