<?php

  include ('conexion.php');

  session_start();

  $noticia=$_POST["titulo_noticia"];
  $descripcion=$_POST["descripcion_noticia"];


  $sql = mysqli_query($con,"INSERT INTO noticias VALUES (NULL,'$noticia', '$descripcion')");
  if ($sql) {
    /**
    * Manda al usuario a una pagina de confirmacion de la creacion del curso
    */
    $message = "Noticia creada";
    echo "<script type='text/javascript'>alert('$message');document.location='../noticias_admin.php';</script>";


  }

  else {
    /**
    *notificacion de registro fallido
    */
    // $message = mysqli_error($con);
    // echo "<script type='text/javascript'>alert('$message');</script>";
    echo mysqli_error($con);
  }

  unlink('../uploads/imagenes/' . $nombre_imagen); //Borra imagen que se subio a la carpeta del servidor desde la computadora
  ?>
