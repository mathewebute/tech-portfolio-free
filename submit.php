<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = 'mathewebute001@gmail.com'; // Your Gmail address
$subject = 'Contact Form Submission';

$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";

mail($to, $subject, $message, $headers);

echo 'Message sent successfully!';
?>
