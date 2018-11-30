<?php 
$db="proyis";
$con=mysqli_connect("localhost","rootis","123456",$db) or die("conexion fallida");
$sql = mysqli_query($con,"SELECT * FROM Agenda");
 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Agenda</title>
</head>
<body>
	<table>
		<thead id="encabezado_tabla">
				<tr>
					<td># Id</td>
					<td> Nombre del pasiente</td>
					<td >Hora</td>
					<td>Fecha</td>
				</tr>
			</thead>
		<?php 
		while ($row=mysqli_fetch_array($sql)) {
			echo '<tr>';
			echo '<td>'.$row["id_cita"].' </td>';
			echo '<td>'.$row["usuario"].' </td>';
			echo '<td>'.$row["hora_inicio"].'-'.$row["hora_fin"].' </td>';
			echo '<td>'.$row["fecha"].' </td>';
			echo '</tr>';
		}
		 ?>	
	</table>
</body>
</html>