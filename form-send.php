<?php 
if(isset($_POST['submit'])){
    $to = "connermckee01@gmail.com"; 
    $from = $_POST['email']; 
    $name = $_POST['name'];
    $messages = $_POST['message'];
    $subject = "Form submission";
    $message = $name. " wrote the following:" . "\n\n" . $_POST['message'];
    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2);
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    }
?>