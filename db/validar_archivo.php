<?php
/**
*codigo para validar los archivos mandados por el profecionista pertenesen al cursos_admin
*/
  include ('conexion.php');

  $valor = $_POST['group2'];
  $usuario = $_POST['usuario'];

  echo $valor;

  if ($valor == 1) {
      $sql = mysqli_query($con,"UPDATE info_profesionista SET validado = '1' WHERE usuario = '$usuario'");
      header("Location: ../archivos_admin.php");
  }
  else {
    $sql2 = mysqli_query($con,"DELETE FROM info_profesionista WHERE usuario = '$usuario'");
    header("Location: ../archivos_admin.php");
  }



 ?>
