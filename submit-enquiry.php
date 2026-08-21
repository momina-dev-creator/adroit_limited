<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Collect and sanitize inputs
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    $profession = filter_input(INPUT_POST, 'profession', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $telephone = filter_input(INPUT_POST, 'telephone', FILTER_SANITIZE_SPECIAL_CHARS);
    $service = filter_input(INPUT_POST, 'service', FILTER_SANITIZE_SPECIAL_CHARS);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_SPECIAL_CHARS);

    if (!$name || !$profession || !$email || !$telephone || !$service || !$message) {
        $_SESSION['contact_status_type'] = 'error';
        $_SESSION['contact_status_msg'] = 'Please fill out all fields correctly.';
    } else {
        // Here, you would typically send an email or store the enquiry in a database.
        // For this static/PHP prototype, we will simulate success.
        
        $_SESSION['contact_status_type'] = 'success';
        $_SESSION['contact_status_msg'] = 'Thank you for your enquiry. Our team will contact you shortly.';
    }
}

// Redirect back to the referring page (or contact page)
$referer = $_SERVER['HTTP_REFERER'] ?? '/contact.php';
header("Location: " . $referer);
exit;
