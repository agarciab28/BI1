<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style_formulario.css">
    <title>Crear Curso</title>
  </head>
  <body>
    <?php
      require 'paginas/navbar_admin.php';
    ?>

      <div class="formCurso">
        <form class="curso" action="db/agregar_noticia.php" method="post" enctype="multipart/form-data">

          <input required class="input_curso" type="text" name="titulo_noticia" id="titulo_noticia" value="" placeholder="Título">
          <textarea required class="input_curso" name="descripcion_noticia" id="descripcion_noticia" rows="8" cols="80" placeholder="Descripción de la noticia"></textarea>
          <br>
          <input class="input_curso" type="submit" name="" value="Cofirmar" style="margin-left:30%;">
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
