<!--Coneccion a la base de datos-->
<?php 
$db='proyis';
$con=mysql_connect('localhost','rootis','123456') or die('Problema con la conexion');
mysql_select_db($db,$con)or die('Problema con la base de datos');
Prueba de algo 
 ?>