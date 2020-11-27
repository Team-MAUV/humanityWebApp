<?php

class Email {

  public static function email_send($to,$name, $subject, $message, $headers   ) {

    require "PHPMailer/src/PHPMailer.php";
    require "PHPMailer/src/OAuth.php";
    require "PHPMailer/src/SMTP.php";
    require "PHPMailer/src/POP3.php";
    require "PHPMailer/src/Exception.php";

    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->isSMTP(); 
    $mail->SMTPDebug = null; 
    $mail->Host = "ssl://smtp.gmail.com"; 
    $mail->Port = "465"; // typically 587 
    $mail->SMTPSecure = 'tls'; // ssl is depracated
    $mail->SMTPAuth = true;
    $mail->Username = "tzuchihumanity@gmail.com";
    $mail->Password = "humanity123";
    $mail->setFrom("tzuchihumanity@gmail.com", "Humanity Web App");
    $mail->addAddress("$to", "$name");
    $mail->Subject = $subject;
    $mail->msgHTML("$message"); // remove if you do not want to send HTML email
    $mail->AltBody = 'HTML not supported';

    $mail->send();

  }
}
?>