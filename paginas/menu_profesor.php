<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php
include 'db/conexion.php';
 ?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style_menuprof.css">
  <link rel="stylesheet" href="css/style_formulario.css">
  <title>Profesor</title>
</head>

<body>
<?php
$profesionista = $_GET["profesor"];
$sql=mysqli_query($con,"SELECT * FROM info_profesionista WHERE usuario = '$profesionista'");
 ?>

  <div class="container-fluid h-100">
      <div class="row h-100">
          <aside class="col-12 col-md-2 p-0" style="background-color:#6E828A;">
              <nav class="navbar navbar-expand navbar-dark flex-md-column flex-row align-items-start" style="background-color:#6E828A;">
                  <h1 style="color:white; width:100%; height:100%;">
                    <?php
                    while( $row = mysqli_fetch_assoc($sql) ) {
                      echo $row['usuario'];
                    }
                    ?>
                  </h1>
                  <img src="https://via.placeholder.com/1920x1080.png/143952/fff" alt="imagen_profesor" id="imagenProfesor">
                  <div class="collapse navbar-collapse">
                      <ul class="flex-md-column flex-row navbar-nav w-100 justify-content-between">
                          <li class="nav-item" id="curriculum">
                              <a class="nav-link pl-0" href="#" style="width:100%;">Curriculum</a>
                          </li>
                          <li class="nav-item" id="info">
                              <a class="nav-link pl-0" href="#">Informacion Personal</a>
                          </li>
                          <li>
                            <li class="nav-item" id="agenda">
                              <a class="nav-link pl-0" href="#" style="width:100%;">Agenda</a>
                          </li>
                      </ul>
                  </div>
              </nav>
          </aside>
          <div id="profesor" class="col-sm-10" ></div>
          <div id="id_profesor" class="" style="display:none;">
            <?php echo $profesionista ?>
          </div>
      </div>
  </div>
  <script src="../BI1/js/jquery-3.3.1.min.js"></script>
  <script src="../BI1/js/menu_profesor.js"></script>
</body>
