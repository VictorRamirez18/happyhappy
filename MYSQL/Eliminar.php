<?php
session_start();
error_reporting(0);
include ("Conexion.php");

$filaId = $_POST['id'];

$query = "DELETE FROM productos WHERE id=".$filaId;

$resultado = $con->query($query);


if(!$resultado){
	include("Error.php");
} else{
	include("ProductosDataBase.php");
}
?>