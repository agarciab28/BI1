<?php
/**
*@file registro.php
*@Author Osvaldo SZ
*@brief Código para el registro de un usuario
*/

/**
*inclulle la coneccion
*/
include ('conexion.php');

  /**
  *adquisicion de todos los campos
  */
  $nombre=$_POST["txtNombre"];
  $apellidos=$_POST["txtApellidos"];
  $usuario=$_POST["txtUsuarioReg"];
  $correoElectronico=$_POST["txtCorreo"];
  $pass = md5($_POST["txtPasswordReg"]);//este codigo encripta la contraseña con el estandar md5
  $fechaNacimiento=$_POST["txtFechaNac"];
  $estudios=$_POST["txtNivelEst"];
  $ciudad=$_POST["txtCiudad"];
  $curp=$_POST["txtCurp"];

  /**
  *Inserccion de usuario
  */
  $sql = mysqli_query($con,"INSERT INTO info_usuario VALUES ('$usuario', '$pass', '$nombre', '$apellidos', '$correoElectronico', '$fechaNacimiento', '$estudios', '$ciudad', '$curp', 1)");

  if ($sql) {
    // Manda al usuario a una pagina de confirmacion de registro
    header("Location: ../registro_exitoso_u.php");


  }

  else {
    /**
    *notificacion de registro fallido
    */
    $message = "Usuario ya existente";
    echo "<script type='text/javascript'>alert('$message');document.location='../index.php'</script>";
    /**
    *echo "<script type='text/javascript'>alert('No fue posible el registro');window.location = '../index.php';</script>";
    */
  }
  ?>
