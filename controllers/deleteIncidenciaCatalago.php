<?php
	require_once  '../includes/conexion.php';


	if (isset($_POST['id'])) {

			$idCatalago = $_POST['id'];
			
			$sql = "DELETE FROM catalagoIncidencias WHERE id = $idCatalago";
			
			echo $res = mysqli_query($conexion,$sql);
	}	
?>