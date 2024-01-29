<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


if($_SERVER["REQUEST_METHOD"]==="POST"){
    require_once("../database/functions.php");
    $connection=connection();
    $connection->select_db($database);
    $email=$_POST["email"];

    $stmt_check_email=$connection->prepare("SELECT email FROM users WHERE email=?");
    $stmt_check_email->bind_param("s",$email);
    $stmt_check_email->execute();
    $stmt_check_email_results=$stmt_check_email

    try {

        require_once('../vendor/autoload.php');
        require_once('../vendor/phpmailer/phpmailer/src/PHPMailer.php');
        require_once('../vendor/phpmailer/phpmailer/src/SMTP.php');
        require_once('../vendor/phpmailer/phpmailer/src/Exception.php');

        $mail = new PHPMailer(true);

        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'dennispeter2580@gmail.com';
        $mail->Password   = 'rjsh fupl jcdm ywrn';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;
        $mail->setFrom($email, 'Kenywaa hospital');
        $mail->addAddress($email);
        $mail->isHTML(true);
        $mail->Subject = 'ECOMMERCE PASSWORD CHANGE';


        $verificationCode = generateRandomString(11);

        $mail->Body = "<p style='text-align:center;font-'>Click this link to reset your password <a href='http://localhost/phpfullstack/1.4/ReactHooks/authentication/resetPassword.php'><br>This is a one time reset code, don't share<br><span>{$verificationCode}</span></p>";
        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }    


}
function generateRandomString($length=11){
    $characters = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $randomString="";

    for($i=0;$i<$length;$i++){
        $randomString.=$characters[rand(0,strlen($characters)-1)];
    }
    return $randomString;
}



?>