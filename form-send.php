<?php 
if(isset($_POST['submit'])){
    $to = "connermckee01@gmail.com"; 
    $from = $_POST['email']; 
    $name = $_POST['name'];
    $messages = $_POST['message'];
    $subject = "Form submission";
    $message = $name. " wrote the following:" . "\n\n" . $_POST['message'];
    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    mail($from,);
    echo "Mail Sent. Thank you " . $name . ", I will contact you shortly!";
    }
?>