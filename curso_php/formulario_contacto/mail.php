<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require("../vendor/autoload.php");

function sendMail($name, $email, $subject, $message, $html=false){

    // configurado con mailtrap.io
    $phpmailer = new PHPMailer();
    $phpmailer->isSMTP();
    $phpmailer->Host = 'sandbox.smtp.mailtrap.io';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 2525;
    $phpmailer->Username = '67906fc263a08f';
    $phpmailer->Password = '3763c6c9cb925f';

    //Recipients - destinatario
    $phpmailer->setFrom('contact@webcreativa.site', 'Pagina Web Creativa');
    $phpmailer->addAddress("jeyaleonelgmail.com", $name);     //Add a recipient

    //Content - define el contenido del email
    $phpmailer->isHTML($html);                                  //Set email format to HTML
    $phpmailer->Subject = $subject;
    $phpmailer->Body    = $message;

    $phpmailer->send();
}

?>