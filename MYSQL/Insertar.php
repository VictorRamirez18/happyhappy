<?php 
session_start();
error_reporting(0);
$varsession =  $_SESSION['usuario'];
if($varsession == null || $varsession = ''){
  header("Location: ../Admin.php");
  die();
}
include("Conexion.php");

$producto = trim($_POST['producto']);
$precio = trim($_POST['precio']);

$validacionCamposVacios = (isset($producto) && isset($precio));

$producto = filter_var($producto, FILTER_SANITIZE_SPECIAL_CHARS);
$precio = filter_var($precio, FILTER_SANITIZE_NUMBER_FLOAT);

include("ValidarFile.php");

if($validacionInputImagen && $validacionCamposVacios){

	if($validacionExtensionImagen){

		if($validacionTamanoImagen){

			
			$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
			

			$query = "INSERT INTO productos(producto, imagen, precio) VALUES('$producto','$imagen', $precio)";
			$resultado = $con->query($query);

			if(!$resultado){
				include("Error.php");
			} else{
				unset($_POST['producto']);
				unset($_POST['precio']);
				unset($_FILES['imagen']);
				include("ProductosDataBase.php");
			}

		} else{
			$mensajeError = "Tamaño Excedido";
			include('ValidacionErrorInputFile.php');
		}
		

	} else{
		$mensajeError = "Archivo con extension no permitida";
		include('ValidacionErrorInputFile.php');
	}
	
} else{
	$mensajeError = "Es necesario llenar todos los datos";
	include('ValidacionErrorInputFile.php');}
?>