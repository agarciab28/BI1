<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Inicio</title>
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

  <!-- Carrusel -->
  <div id="carrusel">
    <div id="carrusel-home" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carrusel-home" data-slide-to="0" class="active"></li>
        <li data-target="#carrusel-home" data-slide-to="1"></li>
        <li data-target="#carrusel-home" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active ad1">
          <div class="carousel-caption">
            <div class="texto-cover">
              <h3 style="text-align:center">Noticia 1</h3>
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
          </div>
        </div>
        <div class="carousel-item ad2">
          <div class="carousel-caption">
            <div class="texto-cover">
              <h3 style="text-align:center">Noticia 2</h3>
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
          </div>
        </div>
        <div class="carousel-item ad3">
          <div class="carousel-caption">
            <div class="texto-cover">
              <h3 style="text-align:center">Noticia 3</h3>
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carrusel-home" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
      </a>
      <a class="carousel-control-next" href="#carrusel-home" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Siguiente</span>
      </a>
    </div>
  </div>

  <!-- cursos Destacados -->

  <div class="cursosDestacados">
    <h3 class="title">Cursos Destacados</h3>

    <div class="card" id="cardDestacados" onclick="(window.open('../index.php', '_self'))">
      <img class="card-img-top" width="400" height="171.43" src="https://via.placeholder.com/1920x1080.png/064242/fff" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Titulo del curso</h5>
        <p class="card-text">Ejemplo de descripcion del curso</p>
        <a href="profesor.php" class="card-link" style="color:#143952">Profesor</a>
      </div>
    </div>


    <div class="card" id="cardDestacados" onclick="(window.open('../index.php', '_self'))">
      <img class="card-img-top" width="400" height="171.43" src="https://via.placeholder.com/1920x1080.png/cb7fc7/fff" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Titulo del curso</h5>
        <p class="card-text">Ejemplo de descripcion del curso</p>
        <a href="profesor.php" class="card-link" style="color:#143952">Profesor</a>
      </div>
    </div>

    <div class="card" id="cardDestacados" onclick="(window.open('../index.php', '_self'))">
      <img class="card-img-top" width="400" height="171.43" src="https://via.placeholder.com/1920x1080.png/ff3300/fff" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Titulo del curso</h5>
        <p class="card-text">Ejemplo de descripcion del curso</p>
        <a href="profesor.php" class="card-link" style="color:#143952">Profesor</a>
      </div>
    </div>

    <div class="card" id="cardDestacados" onclick="(window.open('../index.php', '_self'))">
      <img class="card-img-top" width="400" height="171.43" src="https://via.placeholder.com/1920x1080.png/99ff99/fff" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Titulo del curso</h5>
        <p class="card-text">Ejemplo de descripcion del curso</p>
        <a href="profesor.php" class="card-link" style="color:#143952">Profesor</a>
      </div>
    </div>

    <div class="card" id="cardDestacados" onclick="(window.open('../index.php', '_self'))">
      <img class="card-img-top" width="400" height="171.43" src="https://via.placeholder.com/1920x1080.png/e085c2/fff" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Titulo del curso</h5>
        <p class="card-text">Ejemplo de descripcion del curso</p>
        <a href="profesor.php" class="card-link" style="color:#143952">Profesor</a>
      </div>
    </div>
  </div>

<?php
  require_once 'paginas/footer.php';
?>

</body>
<!-- Scripts -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</html>
