<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style_formulario.css">
    <title></title>
  </head>
  <body>
    <?php
      require 'db/auth_p.php';
      require 'paginas/navbar_profesionista.php';
      $id_curso=$_POST['id_curso'];
      $profesionista=$_SESSION['profesionista'];
    ?>

    <div class="formCurso">
      <form class="curso" action="db/upload.php" method="post" enctype="multipart/form-data">
        <label for="video_upload" class="subir" style="width:100%;">Eligir Video</label>
        <input type='file' id="video_upload" name="video_upload" accept="video/mp4, video/x-m4v, video/*" style="display:none"/>
        <input class="input_curso" type="text" name="titulo_entrada" id="titulo_entrada" value="" placeholder="Título">
        <textarea class="input_curso" name="descripcion_entrada" id="descripcion_entrada" rows="8" cols="80" placeholder="Descripción de la entrada"></textarea>
        <input  type="hidden" name="id_curso" value="<?php echo $id_curso; ?>">
        <input class="input_curso" type="submit" name="" value="Agregar Entrada" style="margin-left:30%;">
      </form>
    </div>
  <?php
    require 'paginas/footer.php';
  ?>

  </body>
  <!-- Scripts -->
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</html>
