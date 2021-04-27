<!DOCTYPE html>
<html lang="es">
  <head>
    <title id="title">Empresa Happy Happy</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/jpg" href="Images/Logo.jpg"/>
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/Normalize.css">
    <link rel="stylesheet" href="CSS/General.css">
    <link rel="stylesheet" href="CSS/Empresa.css">
    <link rel="stylesheet" href="CSS/AnimatedBorder.css">
    <link rel="stylesheet" href="CSS/animation.css">
    <script src="JS/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/85b2e44db4.js" crossorigin="anonymous"></script>
    <script src="JS/scrollreveal.js"></script>
  </head>

  <body onload="page()">
    <?php include("Navbar.php");?>
  	<div class="container mx-auto my-4 col-md-10">
      <div class="row col-md">
        <div class="col-sm-7 p-4 text-center d-flex flex-column justify-content-around align-items-center">
          <h3 class="fw-bold title ff-l high-blue fs-1 aniRight">Happy Happy Agua Purificada</h3>
        </div>
        <div class="col-sm-5 d-flex align-items-center justify-content-center p-4">
          <div class="col-md-7 mydiv animate-bg scale2 aniLeft" id="logoHappyEmpresa">
            <img src="Images/Logo.jpg" class="img-fluid" loading="lazy"
            alt="Logo Happy Happy">
          </div>
        </div>
      </div>
    </div>
    <!-- contenedor -->
    <div class="container mx-auto p-4 col-md-8 hvr-bounce-to-right" id="cont-header">
      <div class="row col-md">
        <p class="fs-2 text-center fw-bold ff-l high-blue">Ofrecemos productos orientados a ofrecer un servicio de calidad, en el aspecto de la purificación del agua.</p> 
      </div>
    </div>
    <!-- splash -->
    <div class="container mx-auto my-4 p-4 col-md-5">
      <div class="row col-md">
        <p class="fs-2 text-center fw-bold ff-l high-blue aniRotate">Happy Happy</p>
        <img src="Images/Splash.png" alt="Water splash" class="aniRotate"> 
        <p class="fs-2 text-center fw-bold ff-l high-blue">Enfocada a Pymis y empresas</p> 
      </div>
    </div>
    <!-- div -->
    <div class="container p-4 my-5 d-flex flex-sm-wrap flex-column justify-content-between text-center aniRight" id="cont-mision">
  		<h2 class="ff-l mb-5">Misión de la compañía</h2>
  		<p class="mt-5 ff-l fs-3">Crecimiento industrial a nivel internacional de proveer agua de calidad a un precio accesible. Además de servir, encaminar y escuchar, para desarrollar ideas. Asimismo, llevando agua de una excelente calidad a cada hogar a un bajo costo</p>	
  	</div>
  	<!-- div vision -->
  	<div class="container-sm-fluid p-sm-4 my-5 d-flex flex-sm-wrap flex-column justify-content-around text-center aniLeft" id="cont-vision">
  		<h2 class="ff-l high-blue mb-4">Visión de la compañía</h2>
  		<div class="container-sm p-sm-4 border hvr-curl-top-left" id="div-vision">
	  		<p class="f-l fs-3 high-blue p-3">Crecimiento industrial a nivel internacional de proveer agua de calidad a un precio accesible. Además de servir, encaminar y escuchar, para desarrollar ideas. Asimismo, llevando agua de una excelente calidad a cada hogar a un bajo costo</p>	
  		</div>
  	</div>
  	<!-- div-propietario -->
  	<div class="container mx-auto mt-4 p-4 d-flex flex-column justify-content-center col-md-10" id="cont-propietario">
      <div class="row col-md">
        <div class="col-sm-7 p-4 text-center d-flex flex-column justify-content-around align-items-center">
          <h5 class="fw-bold title ff-l high-blue fs-3">Propietario</h5>
          <h3 class="fw-bold title ff-l high-blue fs-1 scale2 hoverColorBlue1">Jorge Santiago</h3>
        </div>
        <div class="col-sm-5 d-flex align-items-center justify-content-center p-4">
          <div class="col-md-11">
            <img src="Images/IMGPhot.png" class="img-fluid" loading="lazy"
            alt="Imagen Playa">
          </div>
        </div>
      </div>
    </div>
    <?php include("WhatsappIcon.php");?>
    <?php include("Footer.php");?>
    <script src="JS/JavaScript.js"></script>
  </body>
</html>