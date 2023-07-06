<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $to = "watirikambo@gmail.com";
    $headers = "From: $email";
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Subject: $subject\n";
    $email_content .= "Message:\n$message\n";

    if (mail($to, $subject, $email_content, $headers)) {
        echo "<script>alert('Your message has been sent. Thank you!');</script>";
    } else {
        echo "<script>alert('Sorry, an error occurred while sending your message.');</script>";
    }
}
?>
