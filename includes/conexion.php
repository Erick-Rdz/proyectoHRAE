
<?php
	
	$server = "localhost";
	$user = "root";
	$password = "";
	$database = "hrae";
	
	$conexion = mysqli_connect($server,$user,$password,$database);

	mysqli_query($conexion,"SET NAMES 'utf8'");

	if (!isset($_SESSION))
	session_start();

?>