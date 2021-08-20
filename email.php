<?php
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  require_once "vendor/autoload.php";
  header('Access-Control-Allow-Origin: *'); 

  $to = '';
  $name = $_POST['name'];
  $from = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $mail = new PHPMailer(true);
    $mail->SMTPDebug = 0;                                       
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gmail.com';                    
    $mail->SMTPAuth   = true;                             
    $mail->Username   = 'tesleemolamilekan902@gmail.com';                 
    $mail->Password   = 'cqrggxyqterjfncv';   
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;                             
    $mail->Port       = 465;  
            
    $mail->addAddress($to);
       
    $mail->isHTML(true);                                  
    $mail->Subject = $subject;
    $mail->Body    = $message;
    $mail->AltBody = $from.' sent you a mail';
    $mail->send();
?>
