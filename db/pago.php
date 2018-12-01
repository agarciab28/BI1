<?php

  include ('conexion.php');

  $pago=$_GET["pago"];
  $usuario=$_SESSION["usuario"];

  $sql = mysqli_query($con,"UPDATE info_usuario SET premium ='$pago' WHERE info_usuario.usuario='$usuario' ");

  if ($sql) {
    /**
    * Manda al usuario a una pagina de confirmacion de la creacion del curso
    */
    $message = "Pago registrado";
    echo "<script type='text/javascript'>alert('$message');document.location='../cursos_profe.php';</script>";


  }

  else {
    /**
    *notificacion de registro fallido
    */
    $message = mysqli_error($con);
    echo "<script type='text/javascript'>alert('$message');</script>";
  }
?>
