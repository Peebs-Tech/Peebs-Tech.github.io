<?php
 error_reporting(E_ALL);
 ini_set('display_errors', 1);
 
 <?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $name = $_POST["name"];
     $email = $_POST["email"];
     $message = $_POST["message"];
     
     // Email recipient and subject
     $to = "kinpintucan@gmail.com";
     $subject = "New message from $name";
 
     // Email headers
     $headers = "From: $email \r\n";
     $headers .= "Reply-To: $email \r\n";
     $headers .= "CC: cc@example.com \r\n"; // Optional CC
     $headers .= "MIME-Version: 1.0 \r\n";
     $headers .= "Content-Type: text/html;charset=utf-8 \r\n";
 
     // Email message
     $email_body = "<html><body>";
     $email_body .= "<h2>New message from $name</h2>";
     $email_body .= "<p><strong>Name:</strong> $name</p>";
     $email_body .= "<p><strong>Email:</strong> $email</p>";
     $email_body .= "<p><strong>Message:</strong><br>$message</p>";
     $email_body .= "</body></html>";
 
     // Send email
     if (mail($to, $subject, $email_body, $headers)) {
         echo "Thank you! Your message has been sent.";
     } else {
         echo "Sorry, something went wrong. Please try again later.";
     }
 }
 ?>

<!--
This script retrieves the form data using the $_POST superglobal variable and sends an email to kinpintucan@gmail.com with the form data. Note that this is a very basic example and you should implement proper form validation and security measures before deploying a form on a production website.
--->





