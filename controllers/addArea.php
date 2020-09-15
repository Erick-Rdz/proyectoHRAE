<?php


	require_once  '../includes/conexion.php';


	if (isset($_POST['nombre']) && !empty($_POST['nombre'])) {
	$nombreArea = $_POST['nombre'];
	$sql = "INSERT INTO area values(null,'$nombreArea');";
	

	echo $res = mysqli_query($conexion,$sql);

	}	
?>