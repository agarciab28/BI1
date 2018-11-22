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
  $curso=$_POST["titulo"];
  $descripcion=$_POST["descripcion"];
  $usuario=$_POST["usuario"];
  $categoria=$_POST["categoria"];

  /**
  *Inserccion a la base de datos del curso creado por el profesor
  *Con consulta para sacar el id de la categoria del curso con el nombre del curso con la variable $categoria
  */
  $sql = mysqli_query($con,"INSERT INTO cursos VALUES (NULL,'$curso', '$descripcion', '$usuario', (SELECT id_categoria FROM categorias_cursos WHERE descripcion='$categoria'))");
  if ($sql) {
    /**
    * Manda al usuario a una pagina de confirmacion de la creacion del curso
    */
    $message = "Curso creado";
    echo "<script type='text/javascript'>alert('$message');document.location='../paginas/crear_curso.php'</script>";


  }

  else {
    /**
    *notificacion de registro fallido
    */
    $message = "Error al crear curso";
    echo "<script type='text/javascript'>alert('$message');document.location='../paginas/crear_curso.php'</script>";

  }
  ?>
