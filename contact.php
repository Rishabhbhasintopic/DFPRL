<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    // Replace with your actual email address
    $to = "your.email@example.com";
    $subject = "New Contact Form Submission";

    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    $mailBody = "Name: $name\nEmail: $email\n\n$message";

    // Send email
    mail($to, $subject, $mailBody, $headers);

    // You can customize the response message or redirect the user to a thank you page
    echo "Thank you for contacting us!";
} else {
    // Handle invalid requests
    header("HTTP/1.1 400 Bad Request");
    echo "Invalid request";
}
?>
