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
  */
  $sql = mysqli_query($con,"INSERT INTO cursos VALUES ('$curso', '$descripcion', '$usuario', '$categoria')");
//INSERT INTO `cursos` (`id_curso`, `titulo`, `descripcion`, `profesionista`, `categoria`) VALUES (NULL, 'lider 101', 'como ser un lider en 10 pasos', 'ozz', '1');
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
    $message = "Creacion de curso no exitosa";
    echo "<script type='text/javascript'>alert('$message');document.location='../paginas/crear_curso.php'</script>";

  }
  ?>
