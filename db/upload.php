<?php



  if( isset ($_POST['subir'])){

    include ("conexion.php");

    $usuario=$_POST['usuario'];
    $curso=$_POST['curso'];
    $tituloVideo=$_POST['titulo'];
    $descripcion=$_POST['descripcion'];

    /**
    *recupera los datos del archivo(nombre y carpeta donde se almacena temporalmente)
    */
    $nombre= $_FILES['videoCurso']['name'];
    $temporal=$_FILES['videoCurso']['tmp_name'];
    $folder='videoCursos';

    /**
    *Se mueve del folder temporal al folder de cursos
    */
    move_uploaded_file($temporal, $folder.'/'.$nombre);
    /**
    *extrae los bytes del archivo
    */
    $video= file_get_contents($folder.'/'.$nombre);
    /**
    *Inserccion a la base de datos del curso creado por el profesor
    *Con consulta para sacar el id de la categoria del curso con el nombre del curso con la variable $categoria
    */
    $sql = mysqli_query($con,"INSERT INTO entrada_curso VALUES (NULL,'$usuario', (SELECT id_curso FROM cursos WHERE titulo='$curso'), '$tituloVideo', '$descripcion', '$video')");

    if ($sql) {
      /**
      * Manda al usuario a una pagina de confirmacion de la creacion del curso
      */
      $message = "Curso creado";
      echo "<script type='text/javascript'>alert('$message');document.location='../upload.php'</script>";


    }

    else {
      /**
      *notificacion de registro fallido
      */
      $message ="Error al creara el curso";
      echo "<script type='text/javascript'>alert('$message');document.location='../upload.php'</script>";

    }
  }


?>
