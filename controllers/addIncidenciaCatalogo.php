<?php
	require_once  '../includes/conexion.php';


	if (isset($_POST['nombre']) && !empty($_POST['nombre'])) {

			$nombreCatalago = $_POST['nombre'];
			
			$sql = "INSERT INTO catalagoIncidencias values(null,'$nombreCatalago');";
			
			echo $res = mysqli_query($conexion,$sql);

	}	
?>