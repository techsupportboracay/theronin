<?php
header('Content-Type: application/json');
require_once __DIR__ . '/../config/env.php';
require_once __DIR__ . '/../config/beds24.php';

function fail(string $error, int $code = 400): never
{
    http_response_code($code);
    echo json_encode(['ok' => false, 'error' => $error]);
    exit;
}

$checkin = $_GET['checkin'] ?? $_POST['checkin'] ?? '';
$checkout = $_GET['checkout'] ?? $_POST['checkout'] ?? '';
$guests = max(1, (int) ($_GET['guests'] ?? $_POST['guests'] ?? 1));

if (!preg_match('/^\d{4}-\d{2}-\d{2}$/', $checkin) || !preg_match('/^\d{4}-\d{2}-\d{2}$/', $checkout)) {
    fail('Please provide valid check-in and check-out dates.');
}

$in = DateTime::createFromFormat('Y-m-d', $checkin);
$out = DateTime::createFromFormat('Y-m-d', $checkout);
$today = new DateTime('today');

if ($in < $today) {
    fail('Check-in date cannot be in the past.');
}
if ($out <= $in) {
    fail('Check-out date must be after check-in date.');
}
if ($guests > 4) {
    fail('This room sleeps a maximum of 4 guests.');
}

$roomId = (int) env('BEDS24_ROOM_ID');
$client = new Beds24Client();
$result = $client->getRoomCalendar($roomId, $checkin, $out->format('Y-m-d'));

if (!$result['ok']) {
    fail('Could not check availability right now. Please try again or contact us on WhatsApp.', 502);
}

// Expand Beds24's collapsed date ranges into a per-night map.
$perNight = [];
foreach ($result['ranges'] as $range) {
    $cursor = DateTime::createFromFormat('Y-m-d', $range['from']);
    $end = DateTime::createFromFormat('Y-m-d', $range['to']);
    while ($cursor <= $end) {
        $perNight[$cursor->format('Y-m-d')] = $range;
        $cursor->modify('+1 day');
    }
}

$nights = [];
$cursor = clone $in;
while ($cursor < $out) {
    $nights[] = $cursor->format('Y-m-d');
    $cursor->modify('+1 day');
}

$totalPrice = 0;
$minStayRequired = 1;
foreach ($nights as $date) {
    $info = $perNight[$date] ?? null;
    if (!$info || (int) ($info['numAvail'] ?? 0) < 1) {
        echo json_encode(['ok' => true, 'available' => false, 'reason' => "No availability on $date"]);
        exit;
    }
    $totalPrice += (float) ($info['price1'] ?? 0);
    $minStayRequired = max($minStayRequired, (int) ($info['minStay'] ?? 1));
}

if (count($nights) < $minStayRequired) {
    echo json_encode(['ok' => true, 'available' => false, 'reason' => "Minimum stay is $minStayRequired night(s) for these dates."]);
    exit;
}

$deposit = round($totalPrice * 0.10, 2);

echo json_encode([
    'ok' => true,
    'available' => true,
    'nights' => count($nights),
    'currency' => 'PHP',
    'totalPrice' => $totalPrice,
    'depositDue' => $deposit,
    'balanceDue' => round($totalPrice - $deposit, 2),
]);
