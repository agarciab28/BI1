
<?php
/**
*@file registroprof.php
*@Author MiguelMR
*@brief Código para el registro de profesores
*/

/**
*@brief Conexión a la base de datos
*/
 $conn = mysqli_connect("localhost:3307","rootis","123456", "proyis");

/**
Variables para almacenar los valores de los campos del formulario
*/
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

/**
Instrucción para la inserción de la información en la base de datos
*/
$insertar = "INSERT INTO info_profesionista VALUES ('$usuario', '$clave', '$nombre', '$apellidos', '$correo', '$fechanac', '', '$ciudad', '$curp', DEFAULT, '$curriculum', '$rfc')";

/**
*@brief Ejecución de la instrucción
*@param Variable del query
*@return 0 si hay error, 1 si la ejecución es exitosa
*/
$resultado = mysqli_query($conn, $insertar);
if(!$resultado){
	echo "Error al registrarse";
  echo mysqli_error($conn);
}else{
	header("Location: ../registro_exitoso_p.php");
}

/**
Cerrar conexión de la base de datos
*/
mysqli_close($conn);
