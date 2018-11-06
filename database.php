<!--Coneccion a la base de datos-->
<?php 
	$server='localhost';
	$username='rootis';
	$password='123456';
	$database='proyis';
	try {
		$conn= new PDO("mysql:host=$server;dbname=$database;",$username,$password);
	} catch (PDOException $e) {
		die('Connected failed: '.$e->getMessage());
	}
 ?>