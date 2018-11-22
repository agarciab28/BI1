<?php
/**
*@file registro.php
*@Author Osvaldo SZ
*@brief Código para el registro de un usuario
*/
  /**
  *coneccion con la base de datos
  */
  $db="proyis";
  $con=mysqli_connect("localhost","rootis","123456",$db) or die("conexion fallida");
  /**
  *adquisicion de todos los campos
  */
  session_start();
  $thumbnail=
  $curso=$_POST["titulo_curso"];
  $descripcion=$_POST["descripcion_curso"];
  $usuario=$_SESSION["profesionista"];
  $categoria=$_POST["categoria_curso"];

  /**
  *Inserccion a la base de datos del curso creado por el profesor
  *Con consulta para sacar el id de la categoria del curso con el nombre del curso con la variable $categoria
  */
  $sql = mysqli_query($con,"INSERT INTO cursos VALUES (NULL,'$curso', '$descripcion', '$usuario', (SELECT id_categoria FROM categorias_cursos WHERE descripcion='$categoria'), NULL)");
  if ($sql) {
    /**
    * Manda al usuario a una pagina de confirmacion de la creacion del curso
    */
    $message = "Curso creado";
    echo "<script type='text/javascript'>alert('$message');document.location='../cursos_profe.php'</script>";


  }

  else {
    /**
    *notificacion de registro fallido
    */
    $message = mysqli_error($con);
    echo "<script type='text/javascript'>alert('$message');";

  }
  ?>
