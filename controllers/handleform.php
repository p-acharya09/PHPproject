<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    // Email information
    $to = "p.acharya8848@gmail.com";
    $subject = "New Contact Form Submission";
    $headers = "From: $name <$email>";

    // Compose the email content
    $email_content = "You have received a new message from your website contact form.\n\n";
    $email_content .= "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Phone: $phone\n";
    $email_content .= "Message:\n$message\n";

    // Send email
    if (mail($to, $subject, $email_content, $headers)) {
        header('Location: /contact');
    } else {
        echo "Oops! There was a problem sending the message.";
    }
}
?>