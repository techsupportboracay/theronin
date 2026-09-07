<?php
require_once __DIR__ . '/env.php';

/**
 * Sends a plain-text email via direct SMTP (no external library) when SMTP_HOST
 * is configured, otherwise falls back to PHP's mail(). Returns true on success.
 */
function send_mail(string $to, string $subject, string $body, ?string $replyTo = null): bool
{
    $host = env('SMTP_HOST');
    $from = env('SMTP_FROM', 'no-reply@theroninsiargao.com');

    if (!$host) {
        $headers = "From: $from\r\n";
        if ($replyTo) {
            $headers .= "Reply-To: $replyTo\r\n";
        }
        return @mail($to, $subject, $body, $headers);
    }

    $port = (int) env('SMTP_PORT', '587');
    $user = env('SMTP_USER');
    $pass = env('SMTP_PASS');

    $socket = @fsockopen($host, $port, $errno, $errstr, 10);
    if (!$socket) {
        error_log("SMTP connect failed: $errstr");
        return false;
    }

    $read = fn() => fgets($socket, 512);
    $write = function (string $cmd) use ($socket) { fwrite($socket, $cmd . "\r\n"); };

    $read();
    $write('EHLO theroninsiargao.com');
    $read();
    if ($port === 587) {
        $write('STARTTLS');
        $read();
        stream_socket_enable_crypto($socket, true, STREAM_CRYPTO_METHOD_TLS_CLIENT);
        $write('EHLO theroninsiargao.com');
        $read();
    }
    $write('AUTH LOGIN');
    $read();
    $write(base64_encode($user));
    $read();
    $write(base64_encode($pass));
    $authResult = $read();
    if (!str_starts_with($authResult, '235')) {
        error_log("SMTP auth failed: $authResult");
        fclose($socket);
        return false;
    }

    $write("MAIL FROM:<$from>");
    $read();
    $write("RCPT TO:<$to>");
    $read();
    $write('DATA');
    $read();

    $headers = "From: $from\r\nTo: $to\r\nSubject: $subject\r\n";
    if ($replyTo) {
        $headers .= "Reply-To: $replyTo\r\n";
    }
    $write($headers . "\r\n" . $body . "\r\n.");
    $result = $read();
    $write('QUIT');
    fclose($socket);

    return str_starts_with($result, '250');
}
