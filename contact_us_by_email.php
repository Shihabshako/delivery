<?php
    /*include './vendor/autoload.php';
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    
    //Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = "mail.thedeliveryguy.com.bd";                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = "support@thedeliveryguy.com.bd";                     // SMTP username
        $mail->Password   = "deliveryguy181";                               // SMTP password
        $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

        //Recipients
        $mail->setFrom("support@thedeliveryguy.com.bd", 'Mailer');
        $mail->addAddress("thedeliveryguybd@gmail.com");     // Add a recipient

        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Password has been changed';
        $mail->Body    = 'Your password has been changed. You should login with this new password:';

        $mail->send();
       
        echo "success";

    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
       
    }*/

    $message = $_POST['message'];


    $to      = 'thedeliveryguybd@gmail.com';
    $subject = 'the subject';
    $message = $message;
    $headers = 'From: support@thedeliveryguy.com.bd'       . "\r\n" .
                 'Reply-To: webmaster@example.com' . "\r\n" .
                 'X-Mailer: PHP/' . phpversion();

    echo mail($to, $subject, $message, $headers);



?>