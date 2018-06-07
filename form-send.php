<?php 
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "form-submission@cpmckee.info";
    $to = "connermckee01@gmail.com";
    $name = $_POST["name"];
    $email = $_POST["email"];
    $messages = $_POST["message"];
    $message = "Email: $email, Message: $messages";
    $subject = "Contact Form From: $name";
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    echo "Thank you for contacting me! I will get back to you shortly.";

    if(!empty($_POST['website'])) die();
?>