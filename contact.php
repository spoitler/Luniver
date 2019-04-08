<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>LUNIVER</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    </head>
    <body>
        <?php include("menu.php"); ?>
        <div id="title_contact">
            <p>une question ? un problème ? <br>contactez - nous.</p>
        </div>
        <div id="form_contact">
            <form class="msform" action="contact.php" method="post">
                <fieldset id="form_contact_content">
                    <input type="text" name="email" placeholder="Email"/>
                    <textarea type="text" name="message" placeholder="Message" cols="30" rows="5"></textarea>
                    <button type="submit" name="submit" class="submit action-button" value="Submit">Submit</button>
                </fieldset>
            </form>
        </div>
        <?php include("footer.php"); ?>
    </body>
</html>
<?php

include_once ('function.php');

$email = postVar('email');
$message = postVar('message');


// L'envoi de mail
require ("phpmailer/vendor/autoload.php");
// La classe PHPMailer que nous allons utiliser
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);
$mail->IsSMTP();
$mail->SMTPDebug = 0;
$mail->CharSet = 'UTF-8';
$mail->Host = "SMTP-mail.Outlook.com";
$mail->SMTPAuth= true;
$mail->Port = 587;
$mail->Username= 'romain.bonnes@outlook.com';
$mail->Password= 'Rom.Bon_684157';
$mail->SMTPSecure = 'tls';
$mail->From = 'romain.bonnes@outlook.com';
$mail->FromName= 'LUNIVER';
$mail->isHTML(true);
$mail->Subject = 'Contact';
$mail->Body = 'nous avons bien recu votre message';
$mail->addAddress($email);
$mail->send();
$mail->clearAddresses();

$mail->From = 'romain.bonnes@outlook.com';
$mail->FromName= 'LUNIVER';
$mail->isHTML(true);
$mail->Subject = 'Contact';
$mail->Body = $message;
$mail->addAddress('romain.bonnes@outlook.com');

if(!$mail->send()){
   // echo "Mailer Error: " . $mail->ErrorInfo;
}else{
    echo "E-Mail has been sent";
}





