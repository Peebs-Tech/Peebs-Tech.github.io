<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Recipient email address
    $to = "kinpintucan@gmail.com";

    // Subject of the email
    $subject = "New message from $name";

    // Email content
    $body = "Name: $name\n\nEmail: $email\n\nMessage:\n$message";

    // Send the email
    mail($to, $subject, $body);
}
?>
This script retrieves the form data using the $_POST superglobal variable and sends an email to kinpintucan@gmail.com with the form data. Note that this is a very basic example and you should implement proper form validation and security measures before deploying a form on a production website.






