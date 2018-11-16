<?php
  session_start();
  if(!isset($_SESSION["profesionista"])){
    header("Location: index.php");
    exit();
  }
?>
