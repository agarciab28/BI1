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
  session_start();
    $tam_imagen=$_FILES["image_upload"]["size"];
    $nombre_imagen=$_FILES["image_upload"]["name"];
    $ruta_imagen=$_FILES["image_upload"]["tmp_name"];
    $tipo_imagen=$_FILES["image_upload"]["type"];


  $curso=$_POST["titulo_curso"];
  $descripcion=$_POST["descripcion_curso"];
  $usuario=$_SESSION["profesionista"];
  $categoria=$_POST["categoria_curso"];

  $carpeta_destino=$_SERVER['DOCUMENT_ROOT'].'/BI1/uploads/imagenes/';
  move_uploaded_file($ruta_imagen,$carpeta_destino.$nombre_imagen); //se sube la imagen al servidor

  $archivo_objetivo=fopen($carpeta_destino . $nombre_imagen, "r"); //abre flujo de archivos
  $contenido=fread($archivo_objetivo, $tam_imagen); //lee los bytes de la imagen
  $contenido=addslashes($contenido); //quita caracteres que no son reconocidos
  fclose($archivo_objetivo); //cierra flujo de archivos

  /**
  *Inserccion a la base de datos del curso creado por el profesor
  *Con consulta para sacar el id de la categoria del curso con el nombre del curso con la variable $categoria
  */

  $sql = mysqli_query($con,"INSERT INTO cursos VALUES (NULL,'$curso', '$descripcion', '$usuario', (SELECT id_categoria FROM categorias_cursos WHERE categoria='$categoria'), '$contenido', '$tipo_imagen', DEFAULT)");
  if ($sql) {
    /**
    * Manda al usuario a una pagina de confirmacion de la creacion del curso
    */
    $message = "Curso creado";
    echo "<script type='text/javascript'>alert('$message');document.location='../cursos_profe.php';</script>";


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
