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
                <a class="dropdown-item" href="<?php echo '../BI1/pagina_categoria.php?categoria=' . $row['categoria'] ?>"><?php echo $row['categoria'] ?></a>
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
          <form class="form-inline my-2 my-lg-0" action="../../BI1/resultados.php" method="post" >
            <input class="form-control mr-sm-2" type="search" placeholder="Busca cursos" aria-label="Search" name="buscar" id="buscar">
            <button id="btnSearch" class="btn" type="submit">Buscar</button>
          </form>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" data-toggle="modal" data-target="#registerProModal">Registrate como profesionista</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" data-toggle="modal" data-target="#loginModal">Iniciar Sesion</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link" data-toggle="modal" data-target="#registerModal">Registrarse</a>
        </li>
      </ul>
    </div>
    <!-- <div id="navbar-menu-right-side"> -->
    <!-- <div class="navbar-nav ml-auto">
            <ul class="nav navbar-nav action-links">

            </ul>
         </div> -->
  </nav>

  <!-- Pantalla de inicio de sesion -->
  <div class="modal fade" role="dialog" id="loginModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title" id="myModalLabel">Inicia Sesión</h3>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
                <form class="login" action="../BI1/db/validar.php" method="post">
                  <input type="text" name="txtUsuario" id="txtUsuario" value="" placeholder="Usuario" required>
                  <input type="password" name="txtPassword" id="txtPassword" value="" placeholder="Contraseña" required>
                  <input type="submit" name="btnIniciar" value="Iniciar Sesión">
                </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Pantalla Registro -->
  <div class="modal fade" role="dialog" id="registerModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title">Registrate</h3>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form class="login" action="../BI1/prueba.php" method="post">
            <input type="text" name="txtNombre" id="txtNombre" value="" placeholder="Nombre" required>
            <input type="text" name="txtApellidos" id=txtApellidos value="" placeholder="Apellidos" required>
            <input type="text" name="txtUsuarioReg" id="txtUsuarioReg" value="" placeholder="Usuario" required>
            <input type="email" name="txtCorreo" id="txtCorreo" value="" placeholder="Correo electronico" required>
            <input type="password" name="txtPasswordReg" id="txtPasswordReg" value="" placeholder="Contraseña" required>
            <input type="text" name="txtFechaNac" id="txtFechaNac" value="" onfocus="(this.type='date')" onblur="(this.type='text')" placeholder="Fecha de Nacimiento" required>
            <select class="" name="txtNivelEst" id="txtNivelEst" required>
              <option value="null">Nivel de Estudios</option>
              <option value="secundaria">Secundaria</option>
              <option value="bachillerato">Bachillerato</option>
              <option value="licenciatura">Licenciatura</option>
              <option value="postgrado">Postgrado</option>
            </select>
            <input type="text" name="txtCiudad" id="txtCiudad" value="" placeholder="Ciudad" required>
            <input type="text" name="txtCurp" id="txtCurp" value="" placeholder="CURP" required>
            <input type="submit" name="btnIniciar" value="Registrate" required>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Pantalla Registro Profesionista -->
  <div class="modal fade" role="dialog" id="registerProModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title">Se un profesor</h3>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form class="login" action="../BI1/db/registroprof.php" method="post" enctype="multipart/form-data">
            <input type="text" name="txtNombreProf" id="txtNombreProf" value="" placeholder="Nombre" required>
            <input type="text" name="txtApellidosProf" id="txtApellidosProf" value="" placeholder="Apellidos" required>
            <input type="text" name="txtUsuarioProf" id="txtUsuarioProf" value="" placeholder="Usuario" required>
            <input type="email" name="txtCorreoProf" id="txtCorreoProf" value="" placeholder="Correo electronico" required>
            <input type="password" name="txtPasswordProf" id="txtPasswordProf" value="" placeholder="Contraseña" required>
            <input type="text" name="txtFechaNacProf" id="txtFechaNacProf" value="" onfocus="(this.type='date')" onblur="(this.type='text')" placeholder="Fecha de Nacimiento" required>
            <input type="text" name="txtCiudadProf" id="txtCiudadProf" value="" placeholder="Ciudad" required>
            <input type="text" name="txtCurpProf" id="txtCurpProf" value="" placeholder="CURP" required>
            <input type="text" name="txtRFCProf" id="txtRfcProf" value="" placeholder="RFC" required>
            <textarea name="txtCurriculumProf" id="txtCurriculumProf" rows="5" placeholder="Ingresa tu curriculum" required></textarea>

            <label id="btnArchivo"for="cdProf" class="" style="width:100%;">Agregar certificacion</label>
            <input type='file' accept="application/pdf" name="cdProf" id="cdProf" style="display:none;">

            <input type="submit" name="btnIniciar" value="Registrate">
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
