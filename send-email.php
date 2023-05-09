<?php
 error_reporting(E_ALL);
 ini_set('display_errors', 1);
 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Recipient email address
    $to = "youremail@example.com";

    // Subject of the email
    $subject = "New message from $name";

    // Email content
    $body = "Name: $name\n\nEmail: $email\n\nMessage:\n$message";

    // Send the email
    if (mail($to, $subject, $body)) {
        echo "Thank you for your message!";
    } else {
        echo "There was a problem sending your message. Please try again.";
    }
}
?>


<!--
This script retrieves the form data using the $_POST superglobal variable and sends an email to kinpintucan@gmail.com with the form data. Note that this is a very basic example and you should implement proper form validation and security measures before deploying a form on a production website.
--->





