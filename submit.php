<?php
session_start();

// Initialize registrations if not already set
if (!isset($_SESSION['registrations'])) {
    $_SESSION['registrations'] = [];
}

// Capture the form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$message = $_POST['message'];

// Add the new registration to the session
$_SESSION['registrations'][] = [
    'name' => $name,
    'email' => $email,
    'phone' => $phone,
    'gender' => $gender,
    'message' => $message
];

// Redirect to the success page
header("Location: success.php");
exit();
?>
