<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Bienvendo Profesor</title>
    <title></title>
  </head>
  <body>
    <?php
    session_start();
    require 'paginas/navbar_inicio.php';

     ?>
    <div class="jumbotron" id="jumbo_reg">
      <h1 class="display-4">¡Conviertete en Premium!</h1>
      <p class="lead">Haz un modico pago mensual y ten acceso a diversos cursos para ampliar tus conocimientos</p>
      <hr class="my-4" style="background-color: white;">
      <p>Seras redireccionado a la página de PayPal para completar tu pago</p>
      <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
      <input type="hidden" name="cmd" value="_s-xclick">
      <input type="hidden" name="hosted_button_id" value="4M44LDL22LVZC">
      <input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
      <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
      </form>
    </div>
    <?php

    require_once 'paginas/footer.php'; ?>
  </body>
  <!-- Scripts -->
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</html>
