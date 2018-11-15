<?php 
/**
*Conexión a la base de datos
*/
$db='proyis';
$con=mysql_connect('localhost','rootis','123456') or die('Problema con la conexion');
mysql_select_db($db,$con)or die('Problema con la base de datos');

 ?>