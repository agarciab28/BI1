<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style_formulario.css">
    <link rel="stylesheet" href="css/navbar.css">
    <title>Inicio</title>
    <title></title>
  </head>
  <body>
    <?php
      require 'paginas/navbar_simple.php';
      $nombre=$_POST["txtNombre"];
      $apellidos=$_POST["txtApellidos"];
      $usuario=$_POST["txtUsuarioReg"];
      $correoElectronico=$_POST["txtCorreo"];
      $pass=$_POST["txtPasswordReg"];
      $fechaNacimiento=$_POST["txtFechaNac"];
      $estudios=$_POST["txtNivelEst"];
      $ciudad=$_POST["txtCiudad"];
      $curp=$_POST["txtCurp"];
     ?>

     <h1 class="display-4" style="text-align:center; position:relative;">Prueba de personalidad</h1>
     <div class="formCurso">
       <form class="curso" action="db/registro.php" method="post" enctype="multipart/form-data">
         <fieldset id="group1">
           <p>¿Soy capaz de hacer las cosas tan bien como la mayoría de la gente?</p>
           <div class="" style="margin-left:38%; margin-bottom:1em;">
             Si<input type="radio" value="1" name="group1" required>
             No<input type="radio" value="0" name="group1" >
           </div>
         </fieldset>

         <fieldset id="group2">
           <p>¿Tengo una actitud positiva hacia mi mismo/a?</p>
           <div class="" style="margin-left:38%; margin-bottom:1em;">
             Si<input type="radio" value="1" name="group2" required>
             No<input type="radio" value="0" name="group2" >
           </div>
         </fieldset>

         <fieldset id="group2">
           <p>¿Desearía valorarme más a mí mismo/a?</p>
           <div class="" style="margin-left:38%; margin-bottom:1em;">
             Si<input type="radio" value="1" name="group3" required>
             No<input type="radio" value="0" name="group3" >
           </div>
         </fieldset>

         <fieldset id="group2">
           <p>¿En realidad la gente se aprovecha de mí con frecuencia?</p>
           <div class="" style="margin-left:38%; margin-bottom:1em;">
             Si<input type="radio" value="1" name="group4" required>
             No<input type="radio" value="0" name="group4" >
           </div>
         </fieldset>

         <fieldset id="group2">
           <p>¿Soy abierto y franco en lo que respecta a mis sentimientos?</p>
           <div class="" style="margin-left:38%; margin-bottom:1em;">
             Si<input type="radio" value="1" name="group5" required>
             No<input type="radio" value="0" name="group5" >
           </div>
         </fieldset>

         <fieldset id="group2">
           <p>¿Expreso mi opinión con facilidad?</p>
           <div class="" style="margin-left:38%; margin-bottom:1em;">
             Si<input type="radio" value="1" name="group6" required>
             No<input type="radio" value="0" name="group6" >
           </div>
         </fieldset>

         <fieldset id="group2">
           <p>¿He evitado hacer preguntas por miedo a parecer tonto?</p>
           <div class="" style="margin-left:38%; margin-bottom:1em;">
             Si<input type="radio" value="1" name="group7" required>
             No<input type="radio" value="0" name="group7" >
           </div>
         </fieldset>

         <fieldset id="group2">
           <p>¿Ha podido concentrarse bien en lo que hace?</p>
           <div class="" style="margin-left:38%; margin-bottom:1em;">
             Si<input type="radio" value="1" name="group8" required>
             No<input type="radio" value="0" name="group8" >
           </div>
         </fieldset>

         <fieldset id="group2">
           <p>¿Ha sentido que está jugando un papel útil en la vida?</p>
           <div class="" style="margin-left:38%; margin-bottom:1em;">
             Si<input type="radio" value="1" name="group9" required>
             No<input type="radio" value="0" name="group9" >
           </div>
         </fieldset>

         <fieldset id="group2">
           <p>¿Ha sido capaz de hacer frente a sus problemas?</p>
           <div class="" style="margin-left:38%; margin-bottom:1em;">
             Si<input type="radio" value="1" name="group10" required>
             No<input type="radio" value="0" name="group10" >
           </div>
         </fieldset>

         <input type="hidden" name="txtNombre" id="txtNombre" value="<?php echo $nombre?>">
         <input type="hidden" name="txtApellidos" id="txtApellidos" value="<?php echo $apellidos?>">
         <input type="hidden" name="txtUsuarioReg" id="txtUsuarioReg" value="<?php echo $usuario?>">
         <input type="hidden" name="txtCorreo" id="txtCorreo" value="<?php echo $correoElectronico?>">
         <input type="hidden" name="txtPasswordReg" id="txtPasswordReg" value="<?php echo $pass?>">
         <input type="hidden" name="txtFechaNac" id="txtFechaNac" value="<?php echo $fechaNacimiento?>">
         <input type="hidden" name="txtNivelEst" id="txtNivelEst" value="<?php echo $estudios?>">
         <input type="hidden" name="txtCiudad" id="txtCiudad" value="<?php echo $ciudad?>">
         <input type="hidden" name="txtCurp" id="txtCurp" value="<?php echo $curp?>">

         <input type="submit" name="" value="Enviar">
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
