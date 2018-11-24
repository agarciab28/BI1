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
  $id_curso=$_POST['id_curso'];


  $sql = mysqli_query($con,"DELETE FROM cursos WHERE id_curso = $id_curso");
  if ($sql) {
    /**
    * Manda al usuario a una pagina de confirmacion de la creacion del curso
    */
    $message = "Eliminacion realizada";
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
