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
  require 'paginas/navbar_admin.php';
 ?>

 <div class="mis_cursos" >
   <h1 class="display-4" style="text-align:center; position:relative;">Profesores sin validacion</h1>
   <ul class="list-group">
     <?php
       require('db/database.php');
       $sql = "SELECT usuario, certificado FROM info_profesionista WHERE validado = '0'";
       $resultset = mysqli_query($con, $sql) or die("database error:". mysqli_error($con));
         while( $record = mysqli_fetch_assoc($resultset) ) {
       ?>

        <li class="list-group-item"><a target='_blank' href="<?php echo '../BI1/uploads/' . $record['certificado'] ?>"><?php echo $record['usuario'] ?></a>
          <fieldset id="group2" style="float:right;">
            <div class="">
              <form class="" action="../BI1/db/validar_archivo.php" method="post">
                Validar<input type="radio" value="1" id="group2" name="group2" required>
                No Validar<input type="radio" value="0" id="group2" name="group2" >
                <input type="hidden" name="usuario" id="usuario" value="<?php echo $record['usuario'] ?>">
                <input type="submit" name="" value="Registrar">
              </form>

            </div>
          </fieldset>
        </li>


   <?php } ?>

  </ul>
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
