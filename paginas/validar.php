<?php 
//Codigo para la validacion de usuario y contraseña
$db='proyis';
$con=mysqli_connect('localhost','rootis','123456',$db) or die('Problema con la conexion');
$c=0;

//Variables del usuario
$usuario=$_POST['txtUsuario'];
$pass=md5($_POST['txtPassword']);
//Validar contenido en las variables o cajas de texto
if(empty($usuario)|empty($pass))
{
	header("Location: ../index.php");
	exit();
}
//Validacion Existencia del usuario
$sql = mysqli_query($con,"SELECT * FROM info_usuario where usuario = '$usuario' and clave='$pass'");

if ($row = mysqli_fetch_array($sql)) {
	session_start();
	$_SESSION['usuario'] = $usuario;
	header("Location: ../perfil.php");
}
$sql2= mysqli_query($con,"SELECT * FROM info_profesionista where usuario = '$usuario' and clave='$pass'");
if ($row = mysqli_fetch_array($sql2)) {
	session_start();
	$_SESSION['usuario'] = $usuario;
	header("Location: ../paginas/menu_profesor.php");
}

 ?>
