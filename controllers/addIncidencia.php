<?php
	require_once  '../includes/conexion.php';


	if (isset($_POST['enfermera']) && !empty($_POST['enfermera']) 
		&& isset($_POST['incidencia']) && !empty($_POST['incidencia'])){


		$enfermera = $_POST['enfermera'];
		$incidencia = $_POST['incidencia'];
		$fechaInicio = $_POST['fechaInicio'];
		$cubreEnfermera = $_POST['cubreEnfermera'];



		if (isset($_POST['fechaFin']) && !empty($_POST['fechaFin'])) {
			$fechaFin = $_POST['fechaFin'];
			$sql = "INSERT INTO incidencias values(null,$incidencia,$enfermera,'$fechaInicio','$fechaFin',$cubreEnfermera);";
		}else{
			$sql = "INSERT INTO incidencias values(null,$incidencia,$enfermera,'$fechaInicio',null,$cubreEnfermera);";
		}

			
			
			

			
			


			var_dump($sql);

			echo $res = mysqli_query($conexion,$sql);

	}	
?>