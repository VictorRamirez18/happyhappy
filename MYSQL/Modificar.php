<?php 
session_start();
// error_reporting(0);
$varsession =  $_SESSION['usuario'];
if($varsession == null || $varsession = ''){
  header("Location: ../Admin.php");
  die();
}
include("Conexion.php");
if(!isset($_POST['id'])){
  header("Location: ProductosDataBase.php");
}
$id = $_POST['id'];
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Modicar Producto</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/jpg" href="../Images/Logo.jpg"/>
    <link rel="stylesheet" href="../CSS/bootstrap.min.css">
    <link rel="stylesheet" href="estiloDataBase.css">
    <script src="../JS/bootstrap.bundle.min.js"></script>
  </head>

  <body class="d-flex align-items-center" id="body">
  	<?php 
  	$query = "SELECT * FROM productos WHERE id=".$id;
  	$resultado = $con->query($query);
  	if(!$resultado){
  		include("Error.php");
  	}
  	while ($fila = $resultado->fetch_assoc()){;?>
	    <div class="col-sm-6 text-center mx-auto my-5">
	      <form action="Actualizar.php" method="post" class="azulHappyClaro needs-validation d-flex flex-column align-items-center p-3" enctype="multipart/form-data" novalidate>
	      	<input type="text" value="<?php echo $id;?>" name="id" hidden>

	        <div class="col-6 text-center">
	        	<label for="productoInput" class="form-label fs-6 my-1">Nombre del Producto</label>
	          <input type="text" name="producto" class="form-control my-1" id="productoInput" value="<?php echo $fila['producto'];?>" required>
	          <div class="invalid-feedback">
	            Ingrese un nombre válido
	          </div>
	        </div>

	        <div class="col-6 text-center d-flex flex-column align-items-center text-center">
	        	<label for="imagenInput" class="form-label fs-6 my-1">Selecionar Imagen</label>
	          <img height="70px" src="data:image/jpg;base64, <?php echo base64_encode($fila['imagen']);?>" alt="">
			  <input type="file" name="imagen" id="imagenInput" class="form-control my-2">
			</div>

	        <div class="col-6 text-center">
	        	<label for="precioInput" class="form-label fs-6 mt-2 mb-0">Precio (MXN)</label>
	          <input type="number" name="precio" value="<?php echo $fila['precio'];?>" id="precioInput" step="0.001" min="0" class="form-control my-1"required>
	          <div class="invalid-feedback">
	            Ingrese un precio valido
	          </div>
	        </div>

	        <div class="col-6 text-center my-2">
	          <button type="button" onclick="window.history.back()" class="btn btn-warning">Cancelar</button>
	          <button type="submit" class="btn btn-primary">Actualizar</button>
	        </div>

	      </form>
	    </div>
	<?php } ;?>
  </body>
</html>
<script>
  if (window.history.replaceState) { // verificamos disponibilidad
    window.history.replaceState(null, null, window.location.href);
}
  // Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
</script>