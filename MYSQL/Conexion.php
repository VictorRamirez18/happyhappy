<?php
// error_reporting(0);
$varsession =  $_SESSION['usuario'];
if($varsession == null || $varsession = ''){
  header("Location: ../Admin.php");
  die();
} 
$servidor = "sql203.epizy.com";
$usuario = $_SESSION['usuario'];
$contrasena = $_SESSION['password'];
$BD = "epiz_28426775_happyhappy";

$con = mysqli_connect($servidor, $usuario, $contrasena, $BD);

if (!$con){
	die ("Conexión fallida". mysqli_connect_error());
}
 ?>