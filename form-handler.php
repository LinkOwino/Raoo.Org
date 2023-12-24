<?php
If ($_SERVER[“REQUEST_METHOD”] == “POST”) {
    $name = $_POST[“name”];
    $email = $_POST[“email”];
    $subject = $_POST[“subject”];
    $message = $_POST[“message”];

    // Set the recipient email address
    $to = "johnlink238@gmail.com"

    // Set the email subject
    $email_subject = “New Contact Form Submission: $subject”;

    // Compose the email message
    $email_message = “Name: $name\n”;
    $email_message .= “Email: $email\n”;
    $email_message .= “Subject: $subject\n”;
    $email_message .= “Message:\n$message\n”;

    // Additional headers
    $headers = “From: $email\n”;
    $headers .= “Reply-To: $email\n”;

    // Send the email
    If (mail($to, $email_subject, $email_message, $headers)) {
        // Email sent successfully
        Echo “Thank you for your message. We will get back to you shortly.”;
    } else {
        // Error sending email
        Echo “Oops! Something went wrong and we couldn’t send your message.”;
    }
} else {
    // Not a POST request, redirect or handle accordingly
    Echo “Invalid. request.”;
}
?>
