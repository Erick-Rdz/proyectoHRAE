<?php
	require_once  '../includes/conexion.php';


	if (isset($_POST['id'])) {

			$id = $_POST['id'];
			
			$sql = "DELETE FROM incidencias WHERE id = $id";
			
			echo $res = mysqli_query($conexion,$sql);
	}	
?>