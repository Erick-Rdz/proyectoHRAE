<?php
	require_once  '../includes/conexion.php';


	if (isset($_POST['nombre']) && !empty($_POST['nombre']) 
		&& isset($_POST['descripcion']) && !empty($_POST['descripcion'])) {


			$nombreCodigo = $_POST['nombre'];
			$descripcion = $_POST['descripcion'];

			
			$sql = "INSERT INTO Codigo values(null,'$nombreCodigo','$descripcion');";
			
			echo $res = mysqli_query($conexion,$sql);

	}	
?>