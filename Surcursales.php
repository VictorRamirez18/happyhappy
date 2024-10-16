<!DOCTYPE html>
<html lang="es">
  <head>
    <title id="title">Sucursales Happy Happy</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/jpg" href="Images/Logo.jpg"/>
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/Normalize.css">
    <link rel="stylesheet" href="CSS/General.css">
    <link rel="stylesheet" href="CSS/Sucursal.css">
    <link rel="stylesheet" href="CSS/animation.css">
    <script src="JS/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/85b2e44db4.js" crossorigin="anonymous"></script>
    <script src="JS/scrollreveal.js"></script>
  </head>
  <body onload="page()">
    <?php include("Navbar.php");?>
  	<div class="container p-4 mt-4 d-flex flex-column justify-content-between text-center hvr-border-fade aniRight" id="cont-map">
  		<h2 class="ff-l high-blue">Dirección</h2>
  		<p class="ff-l high-blue fs-3">Avenida Cuauhtemoc 120 local 5, Santa Catarina</p>	
  	</div>
  	<!-- Formulario -->
  	<div class="container text-center ff-l fs-3 high-blue my-3" id="contacto">Contáctanos</div>
    <div class="container aniBottom">
      <form action="<?php echo htmlspecialchars('Mail.php');?>" method="post" class="row  my-4 p-4 d-flex flex-column needs-validation" id="form-contacto" novalidate>
        <label for="input-nombre" value="<?php if(isset($name)) echo $name;?>" class="form-label col">Nombre:</label>
        <div class="col-md-6">
          <input type="text" name="name" class="form-control" pattern="[A-Za-z\s]{0,40}" maxlength="40" required>
          <div class="invalid-feedback col">
            Ingresa un nombre valido.
          </div>
        </div>

        <label for="input-correo" class="form-label">Correo</label>
        <div class="has-validation col-md-6" id="input-email">
          <input type="email" name="email" class="form-control" id="input-correo"aria-describedby="inputGroupPrepend" required>
          <div class="invalid-feedback">
            Ingrese un correo valido
          </div>
        </div>

        <div class="col-md-6">
          <label for="input-tel" value="<?php if(isset($name)) echo $name;?>" class="form-label">Telefono:</label>
          <input type="number" name="phone" id="input-tel" class="form-control" required>
          <div class="invalid-feedback">
            Ingresa un teléfo valido.
          </div>
        </div>

        <div class="col-md-6">
          <label for="textarea-msg" class="form-label">Textarea</label>
          <textarea class="form-control" name="message" id="textarea-msg" rows="5" style="resize: none;" required></textarea>
          <div class="invalid-feedback">
            Escribe tu mensaje.
          </div>
        </div>
        <button type="submit" name="submit" class="btn d-flex justify-content-around align-items-center fs-5 p-2 mt-3 col-md-3 hvr-icon-drop hoverBgBlue1 scale1 aniOpacity" disabled>
          <i class="fas fa-envelope hvr-icon"></i>
          <span>Enviar Mensaje</span>
        </button>
      </form>
    </div>
  	
    <?php include("WhatsappIcon.php");?>
    <?php include("Footer.php");?>
    <script>
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
    <script src="JS/JavaScript.js"></script>
  </body>
</html>
