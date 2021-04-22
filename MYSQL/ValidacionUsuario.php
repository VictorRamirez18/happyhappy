<?php
session_start();
$_SESSION['usuario'] = $_POST['usuario'];
$_SESSION['password'] = $_POST['password'];
echo $_SESSION['usuario'];
echo $_SESSION['password'];
if($_SESSION['usuario'] === "epiz_28426775" && $_SESSION['password'] === "AdWr1YCI17q9gnf"){
	header("Location: ProductosDataBase.php");
} else{
	header("Location: ../Admin.php");
}

?>