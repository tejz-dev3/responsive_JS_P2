<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $project = $_POST["project"];
    $message = $_POST["message"];
    
    $to = "tejaswini3.dev@gmail.com"; // Your email address
    $subject = "New Contact Form Submission";
    $headers = "From: $email";
    
    $mailBody = "Name: $name\nEmail: $email\nProject: $project\n\n$message";
    
    mail($to, $subject, $mailBody, $headers);
}
?>
