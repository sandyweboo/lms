
<?php

require "Database.php";

require "mail/SMTP.php";
require "mail/PHPMailer.php";
require "mail/Exception.php";

use PHPMailer\PHPMailer\PHPMailer;

$un = $_POST["un"];
$pwd = $_POST["pwd"];
$email = $_POST["email"];

if(empty($un)){
    echo("enter username");
}else if(empty($pwd)){
    echo("enter password");
}else if(empty($email)){
    echo("enter email");
}else{

    $rs = Database::search("SELECT * FROM `teacher` WHERE `email`='" . $email . "'");
    $n = $rs->num_rows;
    if ($n > 0) {
        echo ("user alresy exist");
    } else {
    Database::iud("INSERT INTO `teacher` (`username`,`pwd`,`email`) VALUES ('".$un ."', '".$pwd ."', '" .$email ."')");

    $mail = new PHPMailer;
    $mail->IsSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'sandyweboo@gmail.com';
    $mail->Password = 'smbzhggpppdakkmf';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->setFrom('sandyweboo@gmail.com', 'Reset Password');
    $mail->addReplyTo('sandyweboo@gmail.com', 'Reset Password');
    $mail->addAddress($email);
    $mail->isHTML(true);
    $mail->Subject = '<h3 style="color:blue">Sandy learn</h3> Teacher login verification';
    $bodyContent = '<h1 style="color:green">Your Verification username is '.$un.' </br> '.$pwd.' </br> </h1>';
    $mail->Body    = $bodyContent;


    if (!$mail->send()) {
        echo 'Verification code sending failed';
    } else {
        echo 'Success';

}
    }
 
    }
?>