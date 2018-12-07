<?php
/**
*Inicia la session de usurio 
*/
  session_start();
  if(!isset($_SESSION["usuario"])){
    header("Location: index.php");
    exit();
  }
?>
