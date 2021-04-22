<?php
// error_reporting(0);
$servidor = "sql203.epizy.com";
$usuario = "epiz_28426775";
$contrasena = "AdWr1YCI17q9gnf";
$BD = "epiz_28426775_happyhappy";

$con = mysqli_connect($servidor, $usuario, $contrasena, $BD);

if (!$con){
	echo "No funciono";
	die ("Conexión fallida". mysqli_connect_error());
}
 ?>