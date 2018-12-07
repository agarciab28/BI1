<?php
/**
*Inicia la session de admin
*/
  session_start();
  if(!isset($_SESSION["admin"])){
    header("Location: index.php");
    exit();
  }
?>
