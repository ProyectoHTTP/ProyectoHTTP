<?php

$nombre=$_POST["nombre"];
$email=$_POST["email"];
$telefono=$_POST["telefono"];
$asunto=$_POST["asunto"];
$mensaje=$_POST["mensaje"];


$header = "From: " . $mail . "\r\n";
$header = "X-Mailer: PHP\ " . phpversion . "\r\n";
$header = "Mime_Version: 1.0 \r\n";
$header = "Content-Type: text/plain" ;

$mensaje = "Mensaje de: " .$nombre. "\r\n";
$mensaje .= "Email: " . $email . "\r\n";
$mensaje .= "Teléfono: " . $telefono . "\r\n";
$mensaje .= "Mensaje: " . $POST ["mensaje"] . "\r\n";
$mensaje .= "Fecha: " .date("d/m/Y"), $header);

$para = "gamerishosho@gmail.com";
$asunto = "Asunto del mensaje";

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:Index.html");
?>