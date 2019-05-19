<?php
include_once ('./db/DatabaseConnect.php');

require_once('PHPMailer-5.2-stable/class.phpmailer.php');

define('Admin', 'ExamCellAutomationA@gmail.com'); // GMail username
define('AdminPass', 'Root@!1234'); // GMail password

class Mailer {

   public $to;
   public $from;
 =
   public $subject;
   public $body;
  
  

function smtpmailer($to, $from, $subject, $body) { 
 global $error;
 $mail = new PHPMailer();  // create a new object
 $mail->IsSMTP(); // enable SMTP
 $mail->SMTPDebug = 0;  // debugging: 1 = errors and messages, 2 = messages only
 $mail->SMTPAuth = true;  // authentication enabled
 $mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for GMail
 $mail->Host = 'smtp.gmail.com';

 $mail->Port = 465; 

 $mail->Username = Admin;  
 $mail->Password = AdminPass;           
 $mail->SetFrom($from);
 $mail->Subject = $subject;
 $mail->Body = $body;
 $mail->AddAddress($to);

 if(!$mail->Send()) {
 $error = 'Mail error: '.$mail->ErrorInfo; 
 return false;
 } else {
 $error = 'Message sent!';
 return true;
 }
}
}
?>