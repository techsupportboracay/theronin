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

$start = $_GET['start'] ?? '';
$end = $_GET['end'] ?? '';

if (!preg_match('/^\d{4}-\d{2}-\d{2}$/', $start) || !preg_match('/^\d{4}-\d{2}-\d{2}$/', $end)) {
    fail('Please provide valid start and end dates.');
}

$startDt = DateTime::createFromFormat('Y-m-d', $start);
$endDt = DateTime::createFromFormat('Y-m-d', $end);
if ($endDt <= $startDt) {
    fail('End date must be after start date.');
}
if ($startDt->diff($endDt)->days > 400) {
    fail('Date range is too large.');
}

$roomId = (int) env('BEDS24_ROOM_ID');
$client = new Beds24Client();
$result = $client->getRoomCalendar($roomId, $start, $end);

if (!$result['ok']) {
    fail('Could not load pricing right now.', 502);
}

// Expand Beds24's collapsed date ranges into a per-night price/availability map.
$days = [];
foreach ($result['ranges'] as $range) {
    $cursor = DateTime::createFromFormat('Y-m-d', $range['from']);
    $rangeEnd = DateTime::createFromFormat('Y-m-d', $range['to']);
    while ($cursor <= $rangeEnd) {
        $days[$cursor->format('Y-m-d')] = [
            'price' => (float) ($range['price1'] ?? 0),
            'available' => (int) ($range['numAvail'] ?? 0) >= 1,
        ];
        $cursor->modify('+1 day');
    }
}

echo json_encode(['ok' => true, 'days' => $days]);
