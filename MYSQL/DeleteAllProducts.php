<?php
session_start();
$varsession =  $_SESSION['usuario'];
if($varsession == null || $varsession = ''){
  header("Location: ../Admin.php");
  die();
}
include("Conexion.php");

$query = "DELETE FROM productos";
$resultado = $con->query($query);

$queryAutoIncrement = "ALTER TABLE productos AUTO_INCREMENT = 1";
$resultadoResetIncrement = $con->query($queryAutoIncrement);

if(!$resultadoResetIncrement){
	echo "No funciono";
}
if(!$resultado){
  header("Location: Error.php");
} else{
	header("Location: ProductosDataBase.php");
}
?>