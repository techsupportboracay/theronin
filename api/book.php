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

$guestBody = <<<TXT
Hi $firstName,

Thanks for requesting a stay at The Ronin Siargao!

Check-in: $checkin
Check-out: $checkout
Guests: $guests
Total: PHP $totalPrice
Booking reference: $reference

Full payment is required to confirm your reservation. Please send PHP $totalPrice via bank transfer:
Bank: $bankName
Account name: $bankAccountName
Account number: $bankAccountNumber
SWIFT: $bankSwift

Once we receive your transfer we'll confirm your booking by email. If you have questions, message us on WhatsApp: https://wa.me/$whatsapp

- The Ronin Siargao
TXT;

send_mail($email, 'Your booking request - The Ronin Siargao', $guestBody);

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
