<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer();

$mail->IsSMTP();
$mail->Host = 'canongadgets.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';

$mail->SMTPAuth = true;
$mail->Username = ''; //your username
$mail->Password = ''; //your password

$mail->setFrom('info@canongadgets.com', 'CanonCode'); //Sender email address & name
$mail->addAddress('user@gmail.com', 'John Doe'); //Recipient email address

$mail->Subject = 'This is a test message';
$mail->Body = 'This is a test message content containing canoncode, please subscribe';
$mail->isHTML(true);

if($mail->send()) {
    echo 'Email Sent Successfully';
} else {
    echo 'Failed to send email' . $mail->ErrorInfo;
}
