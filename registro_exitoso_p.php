<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Bienvendo Profesor</title>
    <title></title>
  </head>
  <body>
    <?php
    session_start();
    if(isset($_SESSION["usuario"])){
      require 'paginas/navbar_inicio.php';
    }
    else if (isset($_SESSION["profesionista"])) {
      require 'paginas/navbar_profesionista.php';
    }

    else {
      require 'paginas/navbar.php';
    }

     ?>
    <div class="jumbotron" id="jumbo_reg">
      <h1 class="display-4">¡Expón tus conocimientos!</h1>
      <p class="lead">Ahora podrás comenzar a buscar cursos de tu interes en nuestras distintas categorías y aprender algo nuevo cada día.</p>
      <hr class="my-4" style="background-color: white;">
      <p>Recuerda verificar tu correo electronico</p>
      <a href="../BI1/index.php" style="color: #6E828A; text-decoration: underline;">Regresar a la página de inicio</a>
    </div>
    <?php

    require_once 'paginas/footer.php'; ?>
  </body>
</html>
