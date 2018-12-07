<?php
/**
*@file validar.php
*@Author Juan José Martínez Paniagua
*@brief Código para validar a los usuarios
*/

$db='proyis';
$con=mysqli_connect('localhost','rootis','123456',$db) or die('Problema con la conexion');
$c=0;

/** Variables del usuario
*/
$usuario=$_POST['txtUsuario'];
$pass=md5($_POST['txtPassword']);
/**Validar contenido en las variables o cajas de texto
*/
if(empty($usuario)|empty($pass))
{
	header("Location: ../index.php");
	exit();
}
/** Validacion Existencia del usuario
*/
$sql = mysqli_query($con,"SELECT * FROM info_usuario where usuario = '$usuario' and clave='$pass'");

if ($row = mysqli_fetch_array($sql)) {
	session_start();
	$_SESSION['usuario'] = $usuario;
	header("Location: ../index.php");
	$c=1;

}
else
{
	echo "<script>alert('Usuario o contraseña incorrectas'); window.location = '../index.php'</script>";
	// header("Location: ../index.php");
	$c=1;
}

/** Validacion Profesionista
*/
$sql2= mysqli_query($con,"SELECT * FROM info_profesionista where usuario = '$usuario' and clave='$pass'");
if ($row = mysqli_fetch_array($sql2)) {
	session_start();
	$_SESSION['profesionista'] = $usuario;
 header("Location: ../index.php");
}
else if($c==0 ){
echo "<script>alert('Usuario o contraseña incorrectas'); window.location = '../index.php'</script>";
// header("Location: ../index.php");
}

/** Validacion administrador
*/
$sql2= mysqli_query($con,"SELECT * FROM administrador where usuario = '$usuario' and clave='$pass'");
if ($row = mysqli_fetch_array($sql2)) {
	session_start();
	$_SESSION['admin'] = $usuario;
 header("Location: ../cursos_admin.php");
}
else if($c==0 ){
echo "<script>alert('Usuario o contraseña incorrectas'); window.location = '../index.php'</script>";
// header("Location: ../index.php");
}
 ?>
