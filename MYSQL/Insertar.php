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
				header("Location: Error.php");
				exit();
			} else{
				unset($_POST['producto'], $_POST['precio'], $_FILES['imagen']);
				unset($producto, $precio, $imagen);
				unset($validacionCamposVacios, $validacionInputImagen, $validacionTamanoImagen, $validacionExtensionImagen);
				header("Location: ProductosDataBase.php");
				exit();
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