<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style_crear_curso.css">
    <title>Crear Curso</title>
  </head>
  <body>
    <?php
      require 'db/auth_p.php';
      require 'paginas/navbar_profesionista.php';
    ?>
      <div class="formCurso">
        <form class="curso" action="db/crear_curso.php" method="post">
          <label for="file_upload" class="subir">Cambiar Thumbnail</label>
          <input class="input_curso" id="file_upload" type='file' accept=".png, .jpg, .jpeg" style="display:none;"/>
          <img id="imagen_curso" src="https://via.placeholder.com/1920x1080.png/99ff99/fff" alt="thumbnail" width=400>
          <input class="input_curso" type="text" name="titulo_curso" id="titulo_curso" value="" placeholder="Título">
          <textarea class="input_curso" name="descripcion_curso" id="descripcion_curso" rows="8" cols="80" placeholder="Descripción del curso"></textarea>
          <select class="input_curso" name="categoria_curso" id="categoria_curso">
            <option value="prueba">Prueba</option>
          </select>
          <input class="input_curso" type="submit" name="" value="Cofirmar">
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
