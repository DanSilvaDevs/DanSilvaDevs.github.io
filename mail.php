<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: capoeira1996@gmail.com'; 
    $to = 'daniel.escosteguy.silva@gmail.com'; 
    $subject = 'Email Inquiry';

    $body = "From: $name\n E-Mail: $email\n Message:\n $message";

    if ($_POST['submit']) {
        if (mail ($to, $subject, $body, $from)) { 
           $success = "Message successfully sent";
        } else {
            $success = "Message Sending Failed, try again";
        }
    }
?>