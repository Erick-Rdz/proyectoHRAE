<?php
	require_once  '../includes/conexion.php';


	if (isset($_POST['id'])) {

			$idCodigo = $_POST['id'];

			$sql = "DELETE FROM Codigo WHERE id= $idCodigo";
			
			echo $res = mysqli_query($conexion,$sql);

	}	
?>