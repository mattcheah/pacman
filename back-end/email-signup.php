<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    //Validate Email Address
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("HTTP/1.0 400 Bad Request");
        exit("Please provide a valid email address!");
    }
    
    $message = ("New Email Signup: ".$email);
    $headers = "From: info@mattcheah.com";

    mail("matt.cheah@gmail.com", "New Mail Signup From OCCGR", $message, $headers);

    header('HTTP/1.0 200 OK');
    exit('Thank you, Your Email Has Been Added To Our Mailing List');
} else {
    header('HTTP/1.0 403 Forbidden');
    exit('This action has been forbidden');
}

?>
