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
	<title>Document</title>
	<link rel="stylesheet" href="../CSS/bootstrap.min.css">
    <script src="../JS/bootstrap.bundle.min.js"></script>
</head>
<body>
	<div class="alert alert-danger" role="alert">
	  <?php echo $mensajeError;?>
	</div>
	<button onclick='window.history.back()'>Regresar</button>
</body>
</html>