<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="../BI1/db/upload.php" method="post" enctype="multipart/form-data">
      <label for="usuario">Usuario</label>
      <input type="usuario" id="usuario" name="usuario">
      <br>
      <label for="curso">Curso</label>
      <input type="text" id="curso" name="curso">
      <br>
      <label for="titulo">Titulo</label>
      <input type="text" id="titulo" name="titulo">
      <br>
      <label for="descripcion">descripcion</label>
      <input type="text" id="descripcion" name="descripcion">
      <br>
      <input type="file" id="videoCurso" name="videoCurso">
      <br>
      <input type="submit" value="SUBIR" name="subir">
    </form>
  </body>
</html>
