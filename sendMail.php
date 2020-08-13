<?php

$_email = "milton.maurenzi@gmail.com";
$cliente_form = $_POST['name'];
$mail_form = $_POST['email'];
$mensaje_form = $_POST['message'];

$cuerpo_mail = "Nombre: ".$cliente_form."\r\n".
               "Correo: ".$mail_form."\r\n".
               "Mensaje: ".$mensaje_form;

//$respuesta="From: $cliente_form  $mail_form";


$headers  = "MIME-Version: 1.0\r\n";  
$headers .= "Content-type: text/html; charset=utf-8\r\n";
//$headers  = "MIME-Version: 1.0\r\n";  $headers .= "Content-type: text/html; charset=utf-8\r\n";  // Additional headers  // This might look redundant but some services REALLY favor it being there.  
$headers .= "To: $mail_form <$mail_form>\r\n";  
$headers .= "From: $_email <$_email>\r\n";

$sendEmail = mail($_email, "Tienes una consulta nueva", $cuerpo_mail, $headers);

 
    if (!$sendEmail)
    {
        echo "success";
    }

?>
