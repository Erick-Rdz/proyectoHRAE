<?php


	require_once  '../includes/conexion.php';


	if (isset($_POST['id'])) {
	$idRegistro = $_POST['id'];
	$sql = "DELETE FROM mes_turno WHERE id = $idRegistro";
	
	echo $res = mysqli_query($conexion,$sql);

	}	
?>