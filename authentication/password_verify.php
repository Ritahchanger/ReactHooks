<?php
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];
    $_SESSION['email']=$email;

    require_once("../database/functions.php");

    $connection = connection();

    if (createDatabase($database)) {

        $connection->select_db($database);
        $stmt_email_check = $connection->prepare("SELECT email FROM users WHERE email=?");
        $stmt_email_check->bind_param("s", $email);
        $stmt_email_check->execute();
        $stmt_email_check_results = $stmt_email_check->get_result();

        if ($stmt_email_check_results->num_rows === 0) {
            echo json_encode(array("emailfound" => false));
        } else {
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
                $mail->Password   = 'erux hjgf yton farc';
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port       = 587;
                $mail->setFrom($email, 'KenWays');
                $mail->addAddress($email);
                $mail->isHTML(true);
                $mail->Subject = 'KenWays';
                $verificationCode = generateRandomString(11);
                $mail->Body = "<p style='font-weight:600;font-size:1.5rem;text-align:center;'>One time reset code don't share:</br><span style='font-size:2.5;font-weight:700;'>{$verificationCode}</span></br> <a href='http://localhost/phpfullstack/1.4/ReactHooks/authentication/resetPassword.php?email={$_SESSION['email']}&code={$verificationCode}''style='font-size:1.5rem;'>Click this link to reset your password</a></p>";
                $mail->send();
                echo json_encode(array("message" => "Email sent successfully"));
            } catch (Exception $e) {
                http_response_code(500); // Internal Server Error
                echo json_encode(array("error" => "Email could not be sent. Mailer Error: " . $mail->ErrorInfo));
            }
        }
    }
}
function generateRandomString($length = 11)
{
    $characters = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $randomString = "";
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}
