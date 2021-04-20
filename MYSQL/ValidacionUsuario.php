<?php
session_start();
$_SESSION['usuario'] = $_POST['usuario'];
$_SESSION['password'] = $_POST['password'];
if($_SESSION['usuario'] === "JohnDoe" && $_SESSION['password'] === "1234"){
	header("Location: ProductosDataBase.php");
} else{
	header("Location: ../Admin.php");
}

?>