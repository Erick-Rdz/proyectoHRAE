<?php


	require_once  '../includes/conexion.php';


	if (isset($_POST['id'])) {
	$idArea = $_POST['id'];
	$sql = "DELETE FROM Area WHERE id = $idArea";
	
	echo $res = mysqli_query($conexion,$sql);

	}	
?>