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
    $message = mysqli_error($sql);
    echo "<script type='text/javascript'>alert('$message');document.location='../paginas/crear_curso.php'</script>";

  }
  ?>
