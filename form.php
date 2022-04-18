<?php


$nombre = $_POST ["name"];
$mail = $_POST ["email"];
$mensaje = $_POST ["texterea"];

$para = "complejomontearomas@gmail.com"
$asunto = "este mail fue enviado desde la web"


mail ($para, $asunto, utf8_decode($mensaje))


header("Location:contacto.html");

?>