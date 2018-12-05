<?php
/**
*@file registro.php
*@Author Osvaldo SZ
*@brief Código para el registro de un usuario
*/
  /**
  *inclulle la coneccion
  */
  include ('conexion.php');
  /**
  *adquisicion de todos los campos
  */
  $id_noticia=$_POST['id_noticia'];


  $sql = mysqli_query($con,"DELETE FROM noticias WHERE id_noticia = $id_noticia");
  if ($sql) {
    /**
    * Manda al usuario a una pagina de confirmacion de la creacion del curso
    */
      $message = "Eliminacion realizada";
      echo "<script type='text/javascript'>alert('$message');document.location='../noticias_admin.php';</script>";


  }

  else {
    /**
    *notificacion de registro fallido
    */
    $message = mysqli_error($con);
    echo "<script type='text/javascript'>alert('$message');</script>";
  }

  ?>
