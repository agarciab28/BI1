<?php 
//Pagina de prueba para inicio de sesion
session_start();
if(isset($_SESSION['usuario'])){
	echo"";
}else{
header("Location: index.php");
exit();
}
echo $_SESSION['usuario']."<br> <a href='../BI1/index.php'>Salir</a>";
 ?>

