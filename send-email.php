<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "onimolesodiq282@gmail.com";
    $subject = "New Contact Message";
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";

    // Use mail function to send email
    if (mail($to, $subject, $body)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email.";
    }
}
?>
