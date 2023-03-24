<?php
  // Retrieve the form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Set the recipient email address
  $to = 'bakery@example.com';

  // Set the email subject
  $subject = 'Message from My Bakery website';

  // Build the email content
  $email_content = "Name: $name\n";
  $email_content .= "Email: $email\n\n";
  $email_content .= "Message:\n$message\n";

  // Build the email headers
  $email_headers = "From: $name <$email>";

  // Send the email
  mail($to, $subject, $email_content, $email_headers);

  // Redirect to the contact page
  header('Location: C:\xampp\htdocs\waridi pastry\contact.php');
?>
