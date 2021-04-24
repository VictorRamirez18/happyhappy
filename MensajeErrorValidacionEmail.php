<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Error Formulario Email</title>
	<link rel="stylesheet" href="CSS/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/bootstrap.min.css.map">
    <script src="../JS/bootstrap.bundle.min.js"></script>
</head>
<body>
	<div class="alert alert-danger" role="alert">
      <?php echo $mensajeError;?>
    </div>
    <button onclick="location.href='Surcursales.php'" class="btn-info mx-2">Regresar</button>
  </body>
</body>
</html>