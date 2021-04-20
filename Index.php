<!DOCTYPE html>
<html lang="es">
  <head>
    <title id="title">Happy Happy</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Victor Ramirez">
    <link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/Normalize.css">
    <link rel="stylesheet" href="CSS/Index.css">
    <link rel="stylesheet" href="CSS/General.css">
    <script src="JS/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/85b2e44db4.js" crossorigin="anonymous"></script>
  </head>

  <body onload="page()">
  	<?php include("Navbar.php");?>
  	 <div class="container mx-auto my-4 col-md-10" id="cont-slogan">
      <div class="row col-md">
        <div class="col-sm-7 p-4 text-center d-flex flex-column justify-content-around align-items-center">
          <h3 class="fw-bold title ff-p">Happy Happy Agua Purificada</h3>
          <h2 id="slogan" class="ff-l">"El agua es la fuerza motriz de la naturaleza"</h2>
        </div>
        <div class="col-sm-5 d-flex align-items-center justify-content-center p-4">
          <div class="col-md-7">
            <img src="Images/GlassWater.jpg" class="img-fluid" loading="lazy"
            alt="GlassWater">
          </div>
        </div>
      </div>
    </div>
    <!-- ***** -->
    <div class="container-fluid d-flex flex-column align-items-center justify-content-between mt-4 mb-5 p-4" id="div-ubicanos">
    	<h2 class="title">Agua purificada de calidad</h2>
    	<button type="button" class="p-3 fs-4" onclick="document.location = 'Surcursales.php'">Ubícanos</button>
    </div>
    <!-- **** -->
    <div class="container fs-1 text-center ff-l high-blue">¿Deseas crear tu propia purificadora?</div>
    <!-- ***** -->
    <div class="container mx-auto my-5 col-md-10" id="div-products">
      <div class="row col-md">
        <div class="col-sm-7 p-4 text-center d-flex flex-column justify-content-around align-items-center ff-l high-blue">
          <h3 class="fw-bold">Tenemos distintos productos que te pueden interesar</h3>
          <button type="button" class="p-3 fs-4 ff-l" onclick="document.location = 'Productos.php'">Ver productos</button>
        </div>
        <div class="col-sm-5 d-flex align-items-center justify-content-center p-2 border">
            <img src="Images/EmpriseWater.jpg" class="img-fluid" loading="lazy"
            alt="EmpriseWater">
        </div>
      </div>
    </div>
    <?php include("WhatsappIcon.php");?>
    <!-- **** -->
    <?php include("Footer.php");?>
    <script src="JS/JavaScript.js"></script>
  <!-- </body> -->
</html>