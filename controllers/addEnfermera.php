<?php
	require_once  '../includes/conexion.php';


	if (isset($_POST['codigo']) && !empty($_POST['codigo']) 
		&& isset($_POST['nombre']) && !empty($_POST['nombre'])
		&& isset($_POST['fechaNa']) && !empty($_POST['fechaNa'])
		&& isset($_POST['sexo']) && !empty($_POST['sexo'])
		&& isset($_POST['turno']) && !empty($_POST['turno'])
		&& isset($_POST['area']) && !empty($_POST['area'])
		&& isset($_POST['fechaIngreso']) && !empty($_POST['fechaIngreso'])){

		$codigo = $_POST['codigo'];
		$nombre = $_POST['nombre'];
		$fechaNa = $_POST['fechaNa'];
		$sexo = $_POST['sexo'];
		$turno = $_POST['turno'];
		$area = $_POST['area'];
		$fechaIngreso = $_POST['fechaIngreso'];

		$sql = "INSERT INTO Enfermera values(null,'$codigo','$nombre','$fechaNa','$sexo','$turno','$fechaIngreso','$area');";
			
			echo $res = mysqli_query($conexion,$sql);

	}	
?>