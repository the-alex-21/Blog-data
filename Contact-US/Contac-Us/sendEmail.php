<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
require_once "PHPMailer/PHPMailer.php";
require_once "PHPMailer/SMTP.php";
require_once "PHPMailer/Exception.php";

if(isset($_POST['nameSubmit']))
{
  $name = $_POST['name'];
  $email = $_POST['Email'];
  $body = $_POST['Message'];
  $sendTo="a.programmer.blog@gmail.com ";//Write the Email name



//Instantiation and passing `true` enables exceptions
$mail = new PHPMailer();

try {
    //Server settings                     //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = "site.email85@gmail.com";                    //Write the Email name
    $mail->Password   = "passwordforemail";                             //Write the Email password
    $mail->Port = 465;
    $mail->SMTPSecure = "ssl";                               //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //email settings
    $mail->isHTML(true);
    $mail->setFrom("$email", "$name");
    $mail->addAddress("$sendTo");
    $mail->Subject = ("$email");
    $mail->Body = $body;

    $mail->send();
    echo 'Message has been sent';
    header("location:index.php?error=none");//if there wasn't an error send error equal none to the URL.
} catch (Exception $e) {
    header("location:index.php?error=error");//if there wasn't an error send error equal error to the URL.
}
}
else {
  header("location:index.php");// if the user isn't from the index.php send the user here.
}
