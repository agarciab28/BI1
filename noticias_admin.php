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
   <h1 class="display-4" style="text-align:center; position:relative;">Todos las Noticias</h1>
   <?php
     require('db/database.php');
     $sql = "SELECT * FROM noticias";
     $resultset = mysqli_query($con, $sql) or die("database error:". mysqli_error($con));
       while( $record = mysqli_fetch_assoc($resultset) ) {
     ?>

     <div class="card" id="cardCurso">
       <!-- <img class="card-img-top" src="../BI1/img/placeholder.jpg" alt=""> -->
       <!-- <?php echo "<img alt='Card image cap' width='400' height='171.43' class='card-img-top' src='data:" . $record['tipo_thumbnail'] . "; base64," . base64_encode($record['thumbnail'])  . "'>"; ?> -->
       <div class="card-body">
         <h5 class="card-title"> <?php echo $record['titulo']; ?></h5>
         <p class="card-text"> <?php echo $record['descripcion']; ?></p>
         <form class="" action="db/eliminar_noticia.php" method="post" style="display: inline-block;">
           <input type="text" id="id_noticia" name="id_noticia" value="<?php echo $record['id_noticia'] ?>" style="display:none;">
           <input type="submit" name="" value="Eliminar" style="background-color:#143952; width:250px;">
         </form>
       </div>
     </div>

 <?php } ?>
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
