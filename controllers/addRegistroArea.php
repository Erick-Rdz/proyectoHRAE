<?php
	require_once  '../includes/conexion.php';


	if (isset($_POST['fechaInicio']) && !empty($_POST['fechaInicio']) && isset($_POST['fechaFin']) && !empty($_POST['fechaFin']) && isset($_POST['area']) && !empty($_POST['area'])&& isset($_POST['enfermera']) && !empty($_POST['enfermera'])) {

			
			$fechaInicio = $_POST['fechaInicio'];
			$fechaFin = $_POST['fechaFin'];
			$area = $_POST['area'];
			$enfermera = $_POST['enfermera'];
			

			$sql = "INSERT INTO mes_area values(null,'$fechaInicio','$fechaFin',$area,$enfermera);";
			
			echo $res = mysqli_query($conexion,$sql);

	}	
?>