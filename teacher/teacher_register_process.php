<?php

 require "Database.php";
 require "mail/SMTP.php";
 require "mail/PHPMailer.php";
 require "mail/Exception.php";

 use PHPMailer\PHPMailer\PHPMailer;

 include "session.php";


 $email = $d["email"];

 $name = $_POST["name"];
 $contact = $_POST["contact"];


 if (empty($name)) {
     echo ("enter your name -require");
 } else if (empty($contact)) {
     echo ("enter your mobile -require");
 } else {
     $rs = Database::search("SELECT * FROM `teacher` WHERE `name`='" . $name . "' OR `contact`='" . $contact . "'");
     $n = $rs->num_rows;

     if ($n > 0) {
         echo ("user alredy exist plz login");
             
     } else {
       
         $code = uniqid();

         Database::iud("UPDATE `teacher` SET `vcode`='".$code."',`name`='" . $name . "', `contact`='" . $contact . "' WHERE `email`='".$email."'");
     $mail = new PHPMailer;
     $mail->IsSMTP();
     $mail->Host = 'smtp.gmail.com';
     $mail->SMTPAuth = true;
     $mail->Username = 'sandyweboo@gmail.com';
     $mail->Password = 'smbzhggpppdakkmf';
     $mail->SMTPSecure = 'ssl';
     $mail->Port = 465;
     $mail->setFrom('sandyweboo@gmail.com', 'verify its you');
     $mail->addReplyTo('sandyweboo@gmail.com', 'verify its you');
     $mail->addAddress($email);
     $mail->isHTML(true);
     $mail->Subject = 'Sandy learn Teacher login verification';
     $bodyContent = '<h4 style="color:green">Your Verification code is '.$code.' </br> </h4>';
     $mail->Body    = $bodyContent;
     echo "ok" ;
     if (!$mail->send()) {
         echo 'Verification code sending failed';
     } else {
        
     }

     }
 }
?>
