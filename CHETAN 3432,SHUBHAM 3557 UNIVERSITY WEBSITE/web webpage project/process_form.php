<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Recipient email address
    $to = "your-email@example.com";

    // Subject of the email
    $email_subject = "New Contact Form Submission: $subject";

    // Build email content
    $email_body = "Name: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Subject: $subject\n\n";
    $email_body .= "Message:\n$message";

    // Send email
    if (mail($to, $email_subject, $email_body)) {
        echo "Thank you for contacting us! We will get back to you shortly.";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
} else {
    // If the form was not submitted properly
    echo "Oops! Form submission error.";
}
?>