<?php
if(isset($_POST['submit'])){
    $to = "eng.abdullahmourad@gmail.com"; // Your email address
    $subject = $_POST['subject'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $headers = "From: ".$name." <".$email.">\r\n";
    
    if(mail($to, $subject, $message, $headers)){
        echo "Your message has been sent.";
    }
    else{
        echo "There was an error sending your message. Please try again later.";
    }
}
?>
