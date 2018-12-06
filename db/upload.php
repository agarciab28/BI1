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
    $tam_video=$_FILES["video_upload"]["size"];
    $nombre_video=$_FILES["video_upload"]["name"];
    $ruta_video=$_FILES["video_upload"]["tmp_name"];
    $tipo_video=$_FILES["video_upload"]["type"];


  $titulo=$_POST["titulo_entrada"];
  $descripcion=$_POST["descripcion_entrada"];
  $usuario=$_SESSION["profesionista"];
  $id_curso=$_POST["id_curso"];

  $carpeta_destino=$_SERVER['DOCUMENT_ROOT'].'/BI1/uploads/videos/';
  move_uploaded_file($ruta_video,$carpeta_destino.$nombre_video); //se sube el video al servidor
  //
  // $archivo_objetivo=fopen($carpeta_destino . $nombre_video, "r"); //abre flujo de archivos
  // $contenido=fread($archivo_objetivo, $tam_video); //lee los bytes del video
  // $contenido=addslashes($contenido); //quita caracteres que no son reconocidos
  // fclose($archivo_objetivo); //cierra flujo de archivos

  /**
  *Inserccion a la base de datos del curso creado por el profesor
  *Con consulta para sacar el id de la categoria del curso con el nombre del curso con la variable $categoria
  */
  // echo "$usuario, $titulo, $descripcion" ;

  $sql = mysqli_query($con,"INSERT INTO entrada_curso VALUES (NULL,'$usuario', '$id_curso', '$titulo', '$descripcion', '$nombre_video')");
  if ($sql) {
    /**
    * Manda al usuario a una pagina de confirmacion de la creacion del curso
    */
    $message = mysqli_error($con);
    echo "<script type='text/javascript'>alert('$message');document.location='../cursos_profe.php';</script>";


  }

  else {
    /**
    *notificacion de registro fallido
    */
    $message = mysqli_error($con);
    echo "<script type='text/javascript'>alert('$message');document.location='../cursos_profe.php';</script>";
  }

  unlink('../uploads/imagenes/' . $nombre_video); //Borra imagen que se subio a la carpeta del servidor desde la computadora
  ?>
