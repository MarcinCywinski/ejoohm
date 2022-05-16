<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $lname = $_POST['lname'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "cyrawis@outlook.com";
    $headers = "From: " . $mailFrom;
    $txt = "You have recived an e-mail from " . $name . $lname . ".\n\n" . $message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: sentMail.html");
}
