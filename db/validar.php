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
	$_SESSION['id']=$row['perfil'];
	header("Location: ../perfil.php");
	$c=1;

}
else
{
	echo "<script>alert('Usuario o contraseña incorrectas')</script>";
	echo"<a href='../index.php'>Volver</a>";
	$c=1;
}

//Validacion Profesionista
$sql2= mysqli_query($con,"SELECT * FROM info_profesionista where usuario = '$usuario' and clave='$pass'");
if ($row = mysqli_fetch_array($sql2)) {
	session_start();
	echo $usuario;
	echo $pass;
	$_SESSION['usuario'] = $usuario;
 header("Location: ../prueba.php");
}
else if($c==0 ){
echo "<script>alert('Usuario o contraseña incorrectas')</script>";
echo"<a href='..index.php'>Volver</a>";
}
 ?>
