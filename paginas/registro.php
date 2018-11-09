<?php
//codigo para el registro de un usuario

  //coneccion con la base de datos
  $db="proyis";
  $con=mysqli_connect("localhost","rootis","123456",$db) or die("conexion fallida");
  //adquisicion de todos los campos
  $nombre=$_POST["txtNombre"];
  $apellidos=$_POST["txtApellidos"];
  $usuario=$_POST["txtUsuario"];
  $correoElectronico=$_POST["txtCorreo"];
  $pass = md5($_POST["txtPassword"]);//este codigo encripta la contraseña con el estandar md5
  $fechaNacimiento=$_POST["txtFechaNac"];
  $estudios=$_POST["txtNivelEst"];
  $ciudad=$_POST["txtCiudad"];
  $curp=$_POST["txtCurp"];

  //Inserccion de usuario
  $sql = mysqli_query($con,"INSERT INTO info_usuario VALUES ('$usuario', '$pass', '$nombre', '$apellidos', '$correoElectronico', '$fechaNacimiento', '$estudios', '$ciudad', '$curp', 1)");

  if ($sql) {
    //notificacion de registro exitoso
    $message = "Registro exitoso";
    echo "<script type='text/javascript'>alert('$message');document.location='../index.php'</script>";


  }

  else {
    //notificacion de registro fallido
    $message = "Usuario ya existente";
    echo "<script type='text/javascript'>alert('$message');document.location='../index.php'</script>";
    //echo "<script type='text/javascript'>alert('No fue posible el registro');window.location = '../index.php';</script>";
  }
  ?>
