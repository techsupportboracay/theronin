<?php
require_once __DIR__ . '/../config/env.php';
require_once __DIR__ . '/../config/mailer.php';

function back(string $status): never
{
    header('Location: ../index.php?sent=' . $status . '#contact');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    back('0');
}

// Honeypot: real visitors never fill this hidden field in.
if (trim($_POST['website'] ?? '') !== '') {
    back('1');
}

$firstName = trim($_POST['first_name'] ?? '');
$lastName = trim($_POST['last_name'] ?? '');
$email = trim($_POST['email'] ?? '');
$subject = trim($_POST['subject'] ?? '');
$message = trim($_POST['message'] ?? '');

if ($firstName === '' || $lastName === '' || !filter_var($email, FILTER_VALIDATE_EMAIL) || $subject === '' || $message === '') {
    back('0');
}

$notifyEmail = env('NOTIFY_EMAIL');
$sent = true;
if ($notifyEmail) {
    $body = "New contact form submission from theroninsiargao.com\n\n"
        . "Name: $firstName $lastName\nEmail: $email\nSubject: $subject\n\n$message";
    $sent = send_mail($notifyEmail, "Contact form: $subject", $body, $email);
}

back($sent ? '1' : '0');
