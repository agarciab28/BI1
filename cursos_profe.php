<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Mis Cursos</title>
  </head>
  <body>
    <?php
      require 'db/auth_p.php';
      require 'paginas/navbar_profesionista.php';
    ?>

    <!-- //Cursos Profesor -->
    <div class="mis_cursos" >
      <h1 class="display-4" style="text-align:center; position:relative;">Mis cursos</h1>
      <?php
        require('db/database.php');
        $usuario = $_SESSION['profesionista'];
        $sql = "SELECT * FROM cursos where profesionista = '$usuario'";
        $resultset = mysqli_query($con, $sql) or die("database error:". mysqli_error($con));
        if(mysqli_num_rows($resultset) > 0){
          while( $record = mysqli_fetch_assoc($resultset) ) {
        ?>

        <div class="card" id="cardCurso">
          <?php echo "<img alt='Card image cap' width='400' height='171.43' class='card-img-top' src='data:" . $record['tipo_thumbnail'] . "; base64," . base64_encode($record['thumbnail'])  . "'>"; ?>
          <div class="card-body">
            <h5 class="card-title"> <?php echo $record['titulo']; ?></h5>
            <p class="card-text"> <?php echo $record['descripcion']; ?></p>
            <form class="" action="" method="post" style="display: inline-block;">
              <input type="submit" name="" value="Eliminar" style="background-color:#143952; width:250px;">
            </form>
            <form class="" action="" method="post" style="display: inline-block;">
              <input type="submit" name="" value="Modificar" style="background-color:#143952; width:121px;">
            </form>
            <form class="" action="" method="post" style="display: inline-block;">
              <input type="submit" name="" value="Agregar" style="background-color:#143952; width:121px;">
            </form>
          </div>
        </div>


    <?php }
            }
            else {
              require 'paginas/sincursos.php';
            }
          ?>
  </div>
    <?php
      require 'paginas/footer.php';
    ?>
  </body>
  <!-- Scripts -->
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</html>
