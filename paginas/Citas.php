<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $profesionista = $_GET["profesor"];
     ?>

    <table class="table table-bordered table-striped">
  		<thead id="encabezado_tabla">
  				<tr>
  					<td> Usuario</td>
  					<td >Hora</td>
  					<td>Fecha</td>
  				</tr>
  			</thead>
  		<?php
      include '../db/database.php';
      $sql=mysqli_query($con,"SELECT * FROM agenda WHERE profesionista = '$profesionista'");
  		while ($row=mysqli_fetch_array($sql)) {
  			echo '<tr>';
  			echo '<td>'.$row["usuario"].' </td>';
  			echo '<td>'.$row["hora_inicio"].'-'.$row["hora_fin"].' </td>';
  			echo '<td>'.$row["fecha"].' </td>';
  			echo '</tr>';
  		}
  		 ?>
  	</table>
  </body>
</html>
