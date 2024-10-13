<?php  
session_start();
$varsession =  $_SESSION['usuario'];
if($varsession == null || $varsession = ''){
  header("Location: ../Admin.php");
  die();
}
include("Conexion.php");

$queryOne = "ALTER TABLE productos DROP id";
$resultQueryOne = $con->query($queryOne);
if(!$resultQueryOne){
	echo "No funciono";
}

$queryTwo = "ALTER TABLE productos AUTO_INCREMENT = 1";
$resultQueryTwo = $con->query($queryTwo);
if(!$resultQueryTwo){
	echo "No funciono";
}

$queryThree = "ALTER TABLE productos ADD id int NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST";
$resultQueryThree = $con->query($queryThree);
if(!$resultQueryThree){
	echo "No funciono";
}

header('Location: ProductosDataBase.php');
?>