<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require ("./vendor/autoload.php");


function sendMail($mensaje, $email, $nombre_completo){

    $phpmailer = new PHPMailer();

    try {
         //conexion con servidor 
    $phpmailer->isSMTP();
    $phpmailer->Host = 'smtp.gmail.com ';
    $phpmailer->SMTPAuth = true;
    $phpmailer->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $phpmailer->Port = 465;
    $phpmailer->Username = '';
    $phpmailer->Password = 'kdnlqdqmrwjrkwta';

    //destinatarios

    $phpmailer->setFrom('from@example.com', 'Mailer');
    $phpmailer->addAddress($email, $nombre_completo); 

    //definiendo el contenido

    $phpmailer->isHTML(true);                                  //Set email format to HTML
    $phpmailer->Subject = "Contacto Formulario NewHarvest";
    $phpmailer->Body    = $mensaje;

    //enviar el correo
    $phpmailer->send();

    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$phpmailer->ErrorInfo}";
    }

}



?>
