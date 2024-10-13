<?php  
if(!isset($mensajeError)){
	header("Location: ../Admin.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Validacion Inputs</title>
	<link rel="icon" type="image/jpg" href="../Images/Logo.jpg"/>
	<link rel="stylesheet" href="../CSS/bootstrap.min.css">
    <script src="../JS/bootstrap.bundle.min.js"></script>
</head>
<body>
	<div class="alert alert-danger" role="alert">
	  <?php echo $mensajeError;?>
	</div>
	<button onclick="location.href='ProductosDataBase.php'" class="btn-info mx-2">Regresar</button>
</body>
</html>