<?php
include 'conexion.php';
session_start();
/**
*Verifica que la sesion se del profesionista para otorgarle el permiso de agregar una cita
*/
if (isset($_SESSION["profesionista"])) {
	/**
	*Variables donde se guardan los datos de la Cita para guardarla en la base de datos
	*/
	$profesionista=$_SESSION["profesionista"];
	$Nom_cliente=$_POST['Nombre'];
	$hrInicio=$_POST['hrInicio'];
	$hrFin=$_POST['hrFin'];
	$fecha=$_POST['Fecha'];
	/**
	*Sentencia para la insercion de la cita en la base de datos
	*/
	$sql=mysqli_query($con,"INSERT into agenda VALUES(DEFAULT,'$profesionista','$Nom_cliente','$hrFin','$hrInicio','$fecha')");
	if ($sql) {
		echo $fecha;
	 	header("Location: ../index.php");
	}
	else {
		echo $hrInicio;
		header("Location: ../index.php");
	}
}


 ?>
