<?php
   
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    
    
    $to      = 'support@thedeliveryguy.com.bd';
    $subject = $subject;
    $message = $message;
    $message .= "\n\n\n";
    $message .= "
        Name : ".$fname." ".$lname."\n
        Email : ".$email."\n
        Phone : ".$phone_number."
    ";
    $headers = 'From: noreply@thedeliveryguy.com.bd'       . "\r\n" .
                'X-Mailer: PHP/' . phpversion();

    echo mail($to, $subject, $message, $headers);
    

?>