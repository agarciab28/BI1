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
      <h1 class="display-4">Visión</h1>
      <p class="lead">Ser una empresa líder que se mantiene a la vanguardia entregando a los usuarios contenido de calidad en el área de desarrollo personal, al mismo tiempo que conecta a la persona con el profesionista adecuado.</p>
    </div>
    <?php

    require_once 'paginas/footer.php'; ?>
  </body>
  <!-- Scripts -->
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</html>
