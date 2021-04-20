<!DOCTYPE html>
<html lang="es">
  <head>
    <title id="title">Productos Happy Happy</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Victor Ramirez">
    <link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/Normalize.css">
    <link rel="stylesheet" href="CSS/General.css">
    <link rel="stylesheet" href="CSS/Productos.css">
    <script src="JS/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/85b2e44db4.js" crossorigin="anonymous"></script>
  </head>

  <body onload="page()">
  	<?php include("Navbar.php");?>
  	<header class="text-center ff-l high-blue"><h2>Arma tu propia purificadora de agua</h2></header>
  	<?php include("MostrarProductos.php");?>
	<!-- Contenedor total de inversion -->
	<div class="container mx-auto my-4 col-md-10" id="div-inversion">
      <div class="row col-md">
        <div class="col-sm-7 p-4 text-center d-flex flex-column justify-content-around align-items-center">
          <h3 class="fw-bold title ff-l">Total de Inversión</h3>
          <h2 class="ff-l">$<?php echo $precioTotal;?> MXN</h2>
        </div>
        <div class="col-sm-5 d-flex align-items-center justify-content-center p-4">
          <div class="col-md-7">
            <img src="Images/CrystalineWater.jpg" class="img-fluid" loading="lazy"
            alt="Agua Cristalina">
          </div>
        </div>
      </div>
    </div>
    <!-- Carrusel -->
    <div id="carouselExampleIndicators" class="carousel slide container" data-bs-ride="carousel">
	  <div class="carousel-indicators">
	    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
	    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
	    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
	  </div>
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img src="Images/ImageCliente1.jpg" class="d-block w-100" alt="Purificadora Imagen 1">
	    </div>
	    <div class="carousel-item">
	      <img src="Images/ImageCliente2.jpg" class="d-block w-100" alt="Purificadora Imagen 2">
	    </div>
	    <div class="carousel-item">
	      <img src="Images/ImageCliente3.jpg" class="d-block w-100" alt="Purificadora Imagen 3">
	    </div>
	  </div>
	  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="visually-hidden">Previous</span>
	  </button>
	  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="visually-hidden">Next</span>
	  </button>
	</div>
	<!-- Dudas -->
	<div class="container text-center ff-l fs-3 high-blue my-3">¿Tienes alguna pregunta?</div>
	<div class="container text-center ff-l fs-3 high-blue my-3">Contáctanos</div>
	<?php include("WhatsappIcon.php");?>
	<?php include("Footer.php");?>
	<script src="JS/JavaScript.js"></script>
  </body>
</html>