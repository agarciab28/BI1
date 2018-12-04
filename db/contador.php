<?php
  include ('conexion.php');
  $curso = $_POST['id_curso'];
  $sql1 = mysqli_query($con,"SELECT visitas FROM cursos WHERE id_curso = '$curso'");
  $row=mysqli_fetch_array($sql1);
  $visitas = $row['visitas'];
  $sql2 = mysqli_query($con,"UPDATE cursos SET visitas = ($visitas + 1) WHERE id_curso = '$curso'");
  if ($sql2) {
    echo 'Se realizo el cambio' . $visitas;
  }else {
    echo mysqli_error($con). '     ' . $visitas;

  }

 ?>
