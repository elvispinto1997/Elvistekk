<?php
$destin="dominicleon25@gmail.com";
$nombre = $_POST["Nombre"];
$Apellido = $_POST["Apellido"];
$correo = $_POST["Correo"];
$contenido = "Nombre: ".$nombre . "\nCorreo:" .$correo 


mail($destin,"contacto",$contenido)
header("Location:blog.html");
?>