<?php
	require_once  '../includes/conexion.php';


	if (isset($_POST['fechaInicio']) && !empty($_POST['fechaInicio']) && isset($_POST['fechaFin']) && !empty($_POST['fechaFin']) && isset($_POST['turno']) && !empty($_POST['turno'])&& isset($_POST['enfermera']) && !empty($_POST['enfermera'])) {

			
			$fechaInicio = $_POST['fechaInicio'];
			$fechaFin = $_POST['fechaFin'];
			$turno = $_POST['turno'];
			$enfermera = $_POST['enfermera'];
			

			$sql = "INSERT INTO mes_turno values(null,'$fechaInicio','$fechaFin','$turno',$enfermera);";
			
			echo $res = mysqli_query($conexion,$sql);

	}	
?>