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
      <li class="nav-item">
        <a class="nav-link" href="#">Item 2</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Item 3</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Subitem 1</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Subitem 2</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Item 4</a>
      </li>
      <li>
        <form class="form-inline my-2 my-lg-0" action="../BI1/resultados.php" method="post" >
          <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search" name="buscar" id="buscar">
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
        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
        <input type="hidden" name="cmd" value="_s-xclick">
        <input type="hidden" name="hosted_button_id" value="4M44LDL22LVZC">
        <input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
        <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
        </form>
      </li>
    </ul>
  </div>
</nav>
</div>
</body>
