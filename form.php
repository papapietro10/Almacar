<?php

$nombre = $_POST[ "name"];
$email = $_POST[ "email"];
$mensaje = $_POST[ "textarea"];

$mensaje ="Este mensaje fue enviado por " . $nombre . "\r\n";
$mensaje .="Su e-mail es: " . $email . "\r\n";
$mensaje .="Mensaje:" . $_POST[ "mensaje"] . "\r\n";
$mensaje .="Enviado el " .date("d/m/y", time())

$para = "duboy36@gmail.com";
$asunto = "Almacar-soluciones"

/*funsion mail*/
mail($para, $asunto, utf8_decode($mensaje), $header);

header("location:index.html")
?>