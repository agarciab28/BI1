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
<?php include 'db/auth_a.php'; ?>
<nav class="navbar navbar-expand-sm fixed-top">
  <a class="navbar-brand" href="cursos_admin.php"><img src="img/logo/BI1logo.jpg" width="30" height="30" class="d-inline-block align-top" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="../BI1/cursos_admin.php">Ver Cursos</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Noticias</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="../BI1/noticias_admin.php">Ver Noticias</a>
          <a class="dropdown-item" href="../BI1/agregar_noticia.php">Agregar Noticia</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Validar Archivos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="db/logout.php">Cerrar Sesión</a>
      </li>
    </ul>
  </div>
</nav>
</div>
</body>
