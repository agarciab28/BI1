<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title></title>
  </head>
  <body>
    <?php
      $curso = $_GET["curso"];
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

     <?php
     if(isset($_SESSION["usuario"])){
       $usuario = $_SESSION["usuario"];
       $sql = "SELECT * FROM info_usuario WHERE usuario='$usuario'";
       $resultset = mysqli_query($con, $sql) or die("database error:". mysqli_error($con));
       while( $record = mysqli_fetch_assoc($resultset) ) {
         if ($record['premium'] == '1') {
           require '../BI1/paginas/cursos.php';
         }
         else {
           require '../BI1/paginas/sinpremium.php';
         }
       }
     }
     else if(isset($_SESSION["profesionista"])){
       require '../BI1/paginas/cursos.php';
     }
     else {
       require '../BI1/paginas/sinpremium.php';
     }
     ?>




<input type="hidden" id="id_curso" name="" value="<?php echo $curso ?>">

     <?php
       require_once 'paginas/footer.php';
     ?>
  </body>
  <!-- Scripts -->
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/contador.js"></script>
</html>
