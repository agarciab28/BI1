<!--Inicio de la pagina-->
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/navbar.css">
<title>Inicio</title>
</head>

<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-sm fixed-top">
  <a class="navbar-brand" href="index.php"><img src="img/logo/BI1logo.jpg" width="30" height="30" class="d-inline-block align-top" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Inicio</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cursos</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <?php
            include 'db/database.php';
            $sql=mysqli_query($con,"SELECT * FROM categorias_cursos");
            while( $row = mysqli_fetch_assoc($sql) ) { ?>
              <a class="dropdown-item" href="<?php echo '../BI1/pagina_cursos.php?categoria=' . $row['categoria'] ?>"><?php echo $row['categoria'] ?></a>
            <?php } ?>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Quiénes Somos</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="mision.php">Misión</a>
          <a class="dropdown-item" href="vision.php">Visión</a>
          <a class="dropdown-item" href="valores.php">Valores</a>
        </div>
      </li>
      <li>
        <form class="form-inline my-2 my-lg-0" action="../BI1/resultados.php" method="post" >
          <input class="form-control mr-sm-2" type="search" placeholder="Busca cursos" aria-label="Search" name="buscar" id="buscar">
          <button id="btnSearch" class="btn" type="submit">Buscar</button>
        </form>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION["usuario"] ?></a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Mi Cuenta</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="db/logout.php">Cerrar Sesion</a>
        </div>
      </li>
      <li>
<<<<<<< HEAD
        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
          <input type="hidden" name="cmd" value="_s-xclick">
          <input type="hidden" name="hosted_button_id" value="8DU78KHDRTHM8">
          <input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_subscribeCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
          <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
=======
        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
        <input type="hidden" name="cmd" value="_s-xclick">
        <input type="hidden" name="hosted_button_id" value="8DU78KHDRTHM8">
        <input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_subscribeCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
        <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
>>>>>>> gh-pages
        </form>
      </li>
    </ul>
  </div>
</nav>
</div>
</body>
