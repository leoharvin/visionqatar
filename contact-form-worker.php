<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $body = "Name: " . $name . "\r\nEmail: " . $email . "\r\nPhone: " . $phone . "\r\nMessage: " . $message;

    mail('info@visionqatar.net', "New enquiry via website", $body);
    header('Location:./?message=1');
}

if(isset($_POST['contact'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $body = "Name: " . $name . "\r\nEmail: " . $email . "\r\nSubject: " . $subject . "\r\nMessage: " . $message;
    mail('info@visionqatar.net', "New enquiry via website", $body);
    header('Location:./?message=1');
}
