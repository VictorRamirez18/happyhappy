<?php
session_start();
error_reporting(0);
include ("Conexion.php");

$filaId = $_POST['id'];

$query = "DELETE FROM productos WHERE id=".$filaId;
$resultado = $con->query($query);


if(!$resultado){
	header("Location: Error.php");
} else{
	header("Location: ProductosDataBase.php");
}
?>