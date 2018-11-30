<?php 
include 'conexion.php';
session_start();
if (isset($_SESSION["profesionista"])) {
	$profesionista=$_SESSION["profesionista"];
	$Nom_cliente=$_POST['Nombre'];
	$hrInicio=$_POST['hrInicio'];
	$hrFin=$_POST['hrFin'];
	$fecha=$_POST['Fecha'];
	$sql=mysqli_query($con,"INSERT into agenda VALUES(DEFAULT,'$profesionista','$Nom_cliente','$hrFin','$hrInicio',$fecha)");
	echo mysqli_error($con);
	if (mysqli_execute($sql)) {
		echo "Cita registrada";
		header("Location: ../paginas/menu_profesor.php");
	}
}


 ?>

