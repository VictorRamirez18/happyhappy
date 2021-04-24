<?php
// error_reporting(0);
$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$BD = "happyhappy";

$con = mysqli_connect($servidor, $usuario, $contrasena, $BD);

if (!$con){
	echo "No funciono";
	die ("Conexión fallida". mysqli_connect_error());
}
 ?>