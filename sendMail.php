<?php
    

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
// Load Composer's autoloader
require 'vendor/autoload.php';

    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    try {
        //Server settings
        $mail->SMTPDebug = 0;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host =  'smtp.gmail.com';   // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'andreas.mendes94@gmail.com';                 // SMTP username
        $mail->Password = 'Chela1013!';                           // SMTP password
        $mail->SMTPSecure = 'ssl';                           // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 465;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom($_POST['contact_email']);
        $mail->addAddress("andreas_mendes@hotmail.com");     // Add a recipient


 //Content
 $mail->isHTML(true);                                  // Set email format to HTML
 $mail->Subject = $_POST['contact_name'];
 $mail->Body    = $_POST['contact_message'];

 $mail->send();
 //echo 'Message has been sent';
 header('Location: index.html');
 exit();
} catch (Exception $e) {
 echo 'Message could not be sent.';
 echo 'Mailer Error: ' . $mail->ErrorInfo;
}
?>