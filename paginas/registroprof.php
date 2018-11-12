<?php

//Conexión a la base de datos
 $conn = mysqli_connect("localhost:3307","rootis","123456", "proyis");

//Variables de los campos
$nombre = $_POST["txtNombreProf"];
$apellidos = $_POST["txtApellidosProf"];
$usuario = $_POST["txtUsuarioProf"];
$correo = $_POST["txtCorreoProf"];
$clave = md5($_POST["txtPasswordProf"]);
$fechanac = $_POST["txtFechaNacProf"];
$ciudad = $_POST["txtCiudadProf"];
$curp = $_POST["txtCurpProf"];
$rfc = $_POST["txtRFCProf"];
$curriculum = $_POST["txtCurriculumProf"];

//Query para la base de datos
$insertar = "INSERT INTO info_profesionista VALUES ('$usuario', '$clave', '$nombre', '$apellidos', '$correo', '$fechanac', '', '$ciudad', '$curp', '', '$curriculum', '$rfc')";

//Ejecución de la consulta
$resultado = mysqli_query($conn, $insertar);
if(!$resultado){
	echo "Error al registrarse";
}else{
	echo "Registro exitoso";
}

//Cerrar conexión
mysqli_close($conn);
