<?php
//codigo para el registro de un usuario
  $db="proyis";
  $con=mysqli_connect("localhost","proyis","123456",$db) or die("conexion fallida");
  //adquisicion de todos los campos
  $nombre=$_POST["txtNombre"];
  $apellidos=$_POST["txtApellidos"];
  $usuario=$_POST["txtUsuario"];
  $correoElectronico=$_POST["txtCorreo"];
  $pass=$_POST["txtPassword"];
  $fechaNacimiento=$_POST["txtFechaNac"];
  $estudios=$_POST["txtNivelEst"];
  $ciudad=$_POST["txtCiudad"];
  $curp=$_POST["txtCurp"];

  //Inserccion de usuario
  $sql = mysqli_query($con,"INSERT INTO info_usuario ('usuario', 'clave', 'nombre', 'apellidos', 'correo', 'fechaNac', 'nivelEstudios', 'ciudad', 'curp', 'perfil') VALUES ('$usuario', '$pass', '$nombre', '$apellidos', '$correoElectronico', '$fechaNacimiento', '$estudios', '$ciudad', '$curp', '1')");

  ?>
