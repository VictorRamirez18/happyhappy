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
if(!$resultado){
  include("Error.php");
} else{
	header("Location: ProductosDataBase.php");
}
?>