<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $fullName = $_POST["text"];
    $email = $_POST["email"];
    $mobileNumber = $_POST["number"];
    $message = $_POST["message"];

    // You can perform further validation here if needed

    // Send an email (example)
    $to = "kjuniab17@email.com";
    $subject = "New Message from Contact Form";
    $body = "Name: $fullName\n";
    $body .= "Email: $email\n";
    $body .= "Mobile Number: $mobileNumber\n";
    $body .= "Message: $message\n";

    // Mail headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you for your message! We will get back to you soon.";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
} else {
    // Redirect back to the form if accessed directly
    header("Location: index.html");
    exit;
}
?>
