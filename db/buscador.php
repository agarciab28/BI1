<?php
include "database.php";
// $i=0;
$busqueda=$_POST['buscar'];
$sql=mysqli_query($con,"SELECT * FROM cursos c INNER JOIN categorias_cursos cc ON cc.id_categoria = c.categoria WHERE titulo like '%".$busqueda."%'");
// while($row=mysqli_fetch_array($sql)){
// $Curso[$i]=$row["titulo"];
// // echo $Curso[$i];
// // echo "<br>";
// $i++;
// }
 ?>
