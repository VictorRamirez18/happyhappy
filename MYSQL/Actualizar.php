<?php 
session_start();
error_reporting(0);
$varsession =  $_SESSION['usuario'];
if($varsession == null || $varsession = ''){
  header("Location: ../Admin.php");
  die();
}
include("Conexion.php");
$id = $_POST['id'];
$producto = trim($_POST['producto']);
$precio = trim($_POST['precio']);

$validacionCamposVacios = (isset($producto) && isset($precio));

$producto = filter_var($producto, FILTER_SANITIZE_SPECIAL_CHARS);
$precio = filter_var($precio, FILTER_SANITIZE_NUMBER_FLOAT);

include("ValidarFile.php");
if($validacionInputImagen){

	if($validacionExtensionImagen){

		if($validacionTamanoImagen){

			$producto = $_POST['producto'];
			$precio = $_POST['precio'];
			$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

			$query = "UPDATE productos SET producto='$producto', imagen='$imagen', precio='$precio' WHERE id='$id'";
			$resultado = $con->query($query);

			if(!$resultado){
				echo "No funcionó";
			} else{
				unset($producto);
				unset($precio);
				unset($imagen);
				header('Location: ProductosDataBase.php');
			}

		} else{
			$mensajeError = "Tamaño Excedido";
			include('ValidacionErrorInputFile.php');
		}
		
	} else{
		$mensajeError = "Archivo con extension no valida";
		include('ValidacionErrorInputFile.php');
	}
	
} else{
	$producto = $_POST['producto'];
	$precio = $_POST['precio'];

	$query = "UPDATE productos SET producto='$producto', precio='$precio' WHERE id='$id'";
	$resultado = $con->query($query);

	if(!$resultado){
		include("Error.php");
	} else{
		header("Location: ProductosDataBase.php");
	}
}

?>