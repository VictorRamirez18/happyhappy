<?php
session_start();
error_reporting(0);
$varsession =  $_SESSION['usuario'];
if($varsession == null || $varsession = ''){
  header("Location: ../Admin.php");
  die();
}
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <title>ProductosDataBase</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/jpg" href="../Images/Logo.jpg"/>
    <link rel="stylesheet" href="../CSS/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../JS/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="estiloDataBase.css">

  </head>

  <body>
    <div class="container-fluid bg-primary text-center p-4 mb-4 text-light">
      <h4>Productos Happy Happy</h4>
    </div>
    <div class="col-sm-6 mx-auto text-center">
      <form action="<?php echo htmlspecialchars('Insertar.php');?>" method="post" class="azulHappyClaro d-flex flex-column align-items-center p-3 needs-validation rounded" enctype="multipart/form-data" novalidate>

        <div class="col-sm-6 text-center">
          <label for="productoInput" class="form-label fs-6 my-1"> Nombre del Producto</label>
          <input type="text" name="producto" value="" class="form-control my-1" id="productoInput" required>
          <div class="invalid-feedback">
            Ingrese un nombre válido
          </div>
        </div>

        <div class="col-sm-6 text-center d-flex flex-column align-items-center text-center">
          <label for="imagenInput" class="form-label fs-6 my-1">Seleccionar Imagen</label>
          <input type="file" name="imagen" id="imagenInput" class="form-control my-1" required>
          <div class="invalid-feedback">
            Seleccione una imagen
          </div>
        </div>

        <div class="col-sm-6 text-center">
          <label for="precioInput" class="form-label fs-6 mt-2 mb-0">Precio (MXN)</label>
          <input type="number" name="precio" step="0.001" id="precioInput" class="form-control my-1" min="0" required>
          <div class="invalid-feedback">
            Ingrese un precio válido
          </div>
        </div>

        <div class="col-sm-6 text-center d-flex justify-content-around">
          <button type="reset" class="my-2 btn btn-warning">Limpiar</button>
          <button type="submit" class="my-2 btn btn-primary">Insertar</button>
        </div>

      </form>
    </div>


    <!-- Botones Cerrar y Eliminar Elementos -->
    <div class="mt-3 d-flex justify-content-start">
      <button class="btn btn-warning mx-2 col-sm-1" data-bs-toggle="modal" data-bs-target="#modalCerrarSesion">Salir</button>
      <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#firstModalDeleteElements">Eliminar todos los productos</button>
    </div>

    <!-- Modal Eliminar Elemento-->
    <div class="modal fade text-center" id="modalEliminarProducto" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Eliminar Elemento</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body fs-5 text-danger">
            ¿Desea eliminar este elemento?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-danger" onclick="eliminar(this.value)" id="btnAceptarModal">Aceptar</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Cerrar Sesión-->
    <div class="modal fade text-center" id="modalCerrarSesion" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Cerrar Sesión</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body fs-5">
            ¿Desea cerrar sesión?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-primary" onclick="location.href = 'CerrarSesion.php';" id="btnAceptarModal">Aceptar</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modales Eliminar Productos-->
    <!-- First modal dialog -->
    <div class="modal fade" id="firstModalDeleteElements" aria-hidden="true" aria-labelledby="..." tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title text-danger" id="staticBackdropLabel">Eliminar Elementos</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body text-danger fs-5">
            ¿Desea eliminar todos los productos?
          </div>
          <div class="modal-footer justify-content-around">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-warning" id="btnAceptarModal" data-bs-toggle="modal" data-bs-target="#secondModalDeleteElements">Aceptar</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Second modal dialog -->
    <div class="modal fade" id="secondModalDeleteElements" aria-hidden="true" aria-labelledby="..." tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title text-danger" id="staticBackdropLabel">Eliminar Elementos</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body text-danger fs-5">
            Confirme que desea eliminar todos los elementos
          </div>
          <div class="modal-footer justify-content-around">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-danger" id="btnAceptarModal" data-bs-toggle="modal" onclick="location.href='DeleteAllProducts.php'">Aceptar</button>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid p-0 p-sm-2 containerTableProductos">
      <?php  
      include('MostrarTablaProductos.php');
      ?>
    </div>    

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

function crearModal(count) {
    var valor = count;
    $('#modalEliminarProducto').modal('show');
    $("#btnAceptarModal").val(valor);
}

function eliminar(count){
    let formulario = `formulario${count}`;
     let codigo = `document.${formulario}.submit()`;
     eval(codigo.toString());    
}
</script>