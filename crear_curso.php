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
      require 'db/auth_p.php';
      require 'paginas/navbar_profesionista.php';
    ?>

      <div class="formCurso">
        <form class="curso" action="db/crear_curso.php" method="post" enctype="multipart/form-data">
          <label for="image_upload" class="subir" style="width:100%;">Cambiar Thumbnail</label>
          <input required value="../BI1/img/placeholder.jpg" type='file' id="image_upload" name="image_upload" accept=".png, .jpg, .jpeg" style="display:none"/>

          <div id="thumbnail_curso">
            <img id="imagen_curso" src="https://via.placeholder.com/1920x1080.png/99ff99/fff" alt="thumbnail" width=400>
          </div>

          <script>
          function readFile(input) {

       if (input.files && input.files[0]) {
         document.getElementById('thumbnail_curso').innerHTML='';
           var reader = new FileReader();

           reader.onload = function (e) {
              var filePreview = document.createElement('img');
               filePreview.style.width="400px";
               filePreview.style.height="171.43px";
               filePreview.id = 'imagen_curso';
               filePreview.src = e.target.result;
               // document.getElementById("thumbnail_curso").innerHTML = '<img id="imagen_curso" width="400" src="', e.target.result,'" title="', escape(theFile.name), '"/>';
               console.log(e.target.result);

               var previewZone = document.getElementById('thumbnail_curso');
               previewZone.appendChild(filePreview);
           }

           reader.readAsDataURL(input.files[0]);
       }
   }

   var fileUpload = document.getElementById('image_upload');
   fileUpload.onchange = function (e) {
       readFile(e.srcElement);
   }
     </script>

          <!-- <img id="imagen_curso" src="https://via.placeholder.com/1920x1080.png/99ff99/fff" alt="thumbnail" width=400> -->
          <input required class="input_curso" type="text" name="titulo_curso" id="titulo_curso" value="" placeholder="Título">
          <textarea required class="input_curso" name="descripcion_curso" id="descripcion_curso" rows="8" cols="80" placeholder="Descripción del curso"></textarea>
          <select required class="input_curso" name="categoria_curso" id="categoria_curso">
            <?php
              include 'db/database.php';
              $sql=mysqli_query($con,"SELECT * FROM categorias_cursos");
              while( $row = mysqli_fetch_assoc($sql) ) { ?>
                <option value="<?php echo $row['categoria'] ?>"><?php echo $row['categoria'] ?></option>
              <?php } ?>

          </select>
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
