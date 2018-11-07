<?php
//codigo para el registro de un usuario
  $db="proyis";
  $con=mysqli_connect("localhost","rootis","123456",$db) or die("conexion fallida");
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
  $sql = mysqli_query($con,"INSERT INTO info_usuario VALUES ('$usuario', '$pass', '$nombre', '$apellidos', '$correoElectronico', '$fechaNacimiento', '$estudios', '$ciudad', '$curp', 1)");

  if ($sql) {
    header("Location: ../index.php");
  }

  else {
    echo $nombre;
    echo $apellidos;
    echo $usuario;
    echo $correoElectronico;
    echo $pass;
    echo $fechaNacimiento;
    echo $estudios;
    echo $ciudad;
    echo $curp;
    //echo "<script type='text/javascript'>alert('No fue posible el registro');window.location = '../index.php';</script>";
  }

  ?>
