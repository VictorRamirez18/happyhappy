<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Victor Ramirez">
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <script src="JS/bootstrap.bundle.min.js"></script>
    <style>
      body{
        height: 100vh;
        background-color: #0C77E8;
      }
    </style>
  </head>

  <body class="d-flex justify-content-center align-items-center">
    <div class="col-sm-4 bg-info p-5">
      <form action="MYSQL/ProductosDataBase.php" method="post" class="needs-validation d-flex flex-column align-items-center text-center justify-content-center" novalidate>

        <div class="col">
          <label for="userInput" class="form-label my-2 fs-6">Usuario</label>
          <input type="text" name="usuario" class="form-control my-2" id="userInput" required>
          <div class="invalid-feedback">
            Ingrese un nombre válido
          </div>
        </div>
        <div class="col">
          <label for="passwordInput" class="form-label my-2 fs-6">Contraseña</label>
          <input type="text" name="password" class="form-control my-2" id="passwordInput" required>
          <div class="invalid-feedback">
            Ingrese su contraseña
          </div>
        </div>
        <div class="col-sm-12 text-center d-flex justify-content-around px-4 mt-4">
          <button type="button" class="my-2 btn btn-primary">Regresar</button>
          <button type="submit" class="my-2 btn btn-warning">Ingresar</button>
        </div>
      </form>
    </div>
  </body>
</html>
<script></script>