<?php
// Set the recipient email address
$to = "michael.guo002@gmail.com";

// Get the form fields
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Set the email subject
$subject = "New message from $name";

// Build the email body
$body = "From: $name\n";
$body .= "Email: $email\n\n";
$body .= "Message:\n$message";

// Set the email headers
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";

// Send the email
mail($to, $subject, $body, $headers);

// Redirect the user to a thank-you page
header("Location: thankyou.html");
exit();
?>
