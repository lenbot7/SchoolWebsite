<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    // Email address to send the form submission
    $to = "lennynoahkay@gmail.com";
    
    // Subject of the email
    $subject = "Warhammer Website Contact Form Submission";
    
    // Compose the message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n\n";
    $email_message .= "Message:\n$message\n";
    
    // Send the email
    $headers = "From: $name <$email>";
    if (mail($to, $subject, $email_message, $headers)) {
        echo "<p>Thank you for your message! We'll get back to you shortly.</p>";
    } else {
        echo "<p>Oops! Something went wrong. Please try again later.</p>";
    }
} else {
    echo "<p>Access denied. Please submit the form from the website.</p>";
}
?>
