<?php


	require_once  '../includes/conexion.php';


	if (isset($_POST['id'])) {
	$idEnfermera = $_POST['id'];
	$sql = "DELETE FROM Enfermera WHERE id = $idEnfermera";
	
	echo $res = mysqli_query($conexion,$sql);

	}	
?>