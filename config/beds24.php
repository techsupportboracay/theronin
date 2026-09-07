<?php
require_once __DIR__ . '/env.php';

class Beds24Client
{
    private string $base;
    private string $envPath;
    private string $tokenCachePath;

    public function __construct()
    {
        $this->base = rtrim(env('BEDS24_API_BASE', 'https://beds24.com/api/v2'), '/');
        $this->envPath = __DIR__ . '/../.env';
        $this->tokenCachePath = __DIR__ . '/../storage/beds24_token.json';
    }

    private function request(string $method, string $path, ?array $body = null, array $headers = []): array
    {
        $options = [
            'http' => [
                'method' => $method,
                'header' => implode("\r\n", array_merge(['Content-Type: application/json'], $headers)),
                'ignore_errors' => true,
            ],
        ];
        if ($body !== null) {
            $options['http']['content'] = json_encode($body);
        }
        $context = stream_context_create($options);
        $raw = @file_get_contents($this->base . $path, false, $context);
        $status = 0;
        if (isset($http_response_header)) {
            foreach ($http_response_header as $h) {
                if (preg_match('#^HTTP/\S+\s+(\d+)#', $h, $m)) {
                    $status = (int) $m[1];
                }
            }
        }
        return [$status, json_decode((string) $raw, true)];
    }

    private function getAccessToken(): string
    {
        if (is_file($this->tokenCachePath)) {
            $cached = json_decode((string) file_get_contents($this->tokenCachePath), true);
            if (is_array($cached) && ($cached['expires'] ?? 0) > time() + 60) {
                return $cached['token'];
            }
        }

        $refreshToken = env('BEDS24_REFRESH_TOKEN');
        [$status, $data] = $this->request('GET', '/authentication/token', null, ["refreshToken: $refreshToken"]);
        if ($status !== 200 || empty($data['token'])) {
            throw new RuntimeException('Beds24 authentication failed (HTTP ' . $status . ')');
        }

        if (!empty($data['refreshToken']) && $data['refreshToken'] !== $refreshToken) {
            $this->persistRefreshToken($data['refreshToken']);
        }

        file_put_contents($this->tokenCachePath, json_encode([
            'token' => $data['token'],
            'expires' => time() + (int) ($data['expiresIn'] ?? 3600) - 120,
        ]));

        return $data['token'];
    }

    private function persistRefreshToken(string $newToken): void
    {
        $raw = file_get_contents($this->envPath);
        $raw = preg_replace('/^BEDS24_REFRESH_TOKEN=.*$/m', 'BEDS24_REFRESH_TOKEN=' . $newToken, $raw);
        file_put_contents($this->envPath, $raw);
    }

    private function authedRequest(string $method, string $path, ?array $body = null): array
    {
        $token = $this->getAccessToken();
        return $this->request($method, $path, $body, ["token: $token"]);
    }

    /**
     * Returns per-date availability + pricing for a room over a date range.
     * @return array{ok:bool, error?:string, nights?:array<int,array>, minStay?:int}
     */
    public function getRoomCalendar(int $roomId, string $startDate, string $endDate): array
    {
        $path = "/inventory/rooms/calendar?roomId=$roomId&startDate=$startDate&endDate=$endDate"
            . '&includeNumAvail=true&includePrices=true&includeMinStay=true';
        [$status, $data] = $this->authedRequest('GET', $path);
        if ($status !== 200 || empty($data['success'])) {
            return ['ok' => false, 'error' => $data['error'] ?? "HTTP $status"];
        }
        $ranges = $data['data'][0]['calendar'] ?? [];
        return ['ok' => true, 'ranges' => $ranges];
    }

    /**
     * Creates a new booking. Returns the raw per-item result from Beds24.
     * @return array{ok:bool, id?:int, error?:string, raw?:array}
     */
    public function createBooking(array $booking): array
    {
        [$status, $data] = $this->authedRequest('POST', '/bookings', [$booking]);
        if ($status !== 200 && $status !== 201) {
            return ['ok' => false, 'error' => is_array($data) ? json_encode($data) : "HTTP $status"];
        }
        $result = $data[0] ?? null;
        if (!is_array($result) || empty($result['success'])) {
            $errors = $result['errors'] ?? null;
            return ['ok' => false, 'error' => $errors ? json_encode($errors) : 'Unknown error from Beds24', 'raw' => $result];
        }
        $id = $result['new']['id'] ?? $result['id'] ?? null;
        return ['ok' => true, 'id' => $id, 'raw' => $result];
    }

    /**
     * Deletes a booking by id. Beds24 refuses this for active bookings -
     * use cancelBooking() to cancel a live reservation instead.
     */
    public function deleteBooking(int $id): array
    {
        [$status, $data] = $this->authedRequest('DELETE', "/bookings?id=$id");
        if ($status !== 200 && $status !== 201) {
            return ['ok' => false, 'error' => is_array($data) ? json_encode($data) : "HTTP $status"];
        }
        return ['ok' => true, 'raw' => $data];
    }

    /**
     * Sets an existing booking's status to "cancelled" (the correct way to
     * void an active booking - Beds24 will not hard-delete active bookings).
     */
    public function cancelBooking(int $id): array
    {
        [$status, $data] = $this->authedRequest('POST', '/bookings', [['id' => $id, 'status' => 'cancelled']]);
        $result = $data[0] ?? null;
        if ($status !== 200 && $status !== 201 || empty($result['success'])) {
            return ['ok' => false, 'error' => is_array($result) ? json_encode($result) : "HTTP $status"];
        }
        return ['ok' => true, 'raw' => $result];
    }
}
