<?php

if (isset($_POST['submit'])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    $to = "compacodes@gmail.com";
    $headers = "From: ".$mail;
    $txt = "Name: " . $name . "\r\n Email: " . $email . "\r\n Subject:" . $subject . "\r\n Message: " . $message;

    mail($to, $subject, $txt, $headers);
    header("Sent");
}



?>