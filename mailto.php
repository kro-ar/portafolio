<?php
$nombre =$_POST['name'];
$email =$_POST['email'];
$asunto =$_POST['affair'];
$mensaje =$_POST['message'];

echo $nombre . "" . $email;

/* $mensaje = "Enviado por: " . $nombre . ",\r\n";
$mensaje = "Mail: " . $email . ",\r\n";
$mensaje = "Asunto : " . $asunto . ",\r\n";
$mensaje = "Mensaje: " . $_POST['mensaje'] . ",\r\n";
$mensaje = "Recibido el: " . date('d/m/Y',time());

$para = 'arias.carolina.ayelen@gmail.com';

//funcion mail
mail($para, $asunto , utf8_decode($mensaje), $header);

$header('Location:index.html');
?> */