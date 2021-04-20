<?php
// error_reporting(0);
$servidor = "localhost";
$usuario = "JohnDoe";
$contrasena = "1234";
$BD = "happyhappy";

$con = mysqli_connect($servidor, $usuario, $contrasena, $BD);

if (!$con){
	die ("Conexión fallida". mysqli_connect_error());
}
 ?>