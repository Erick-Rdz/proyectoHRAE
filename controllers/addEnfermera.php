<?php
	require_once  '../includes/conexion.php';


	/*if (isset($_POST['codigo']) && !empty($_POST['codigo']) 
		&& isset($_POST['nombre']) && !empty($_POST['nombre'])
		&& isset($_POST['fechaNa']) && !empty($_POST['fechaNa'])
		&& isset($_POST['sexo']) && !empty($_POST['sexo'])
		&& isset($_POST['turno']) && !empty($_POST['turno'])
		&& isset($_POST['area']) && !empty($_POST['area'])
		&& isset($_POST['fechaIngreso']) && !empty($_POST['fechaIngreso'])
		&& isset($_POST['activa']) && !empty($_POST['activa'])){
	*/
		$codigo = $_POST['codigo'];
		$nombre = $_POST['nombre'];
		$fechaNa = $_POST['fechaNa'];
		$sexo = $_POST['sexo'];
		$fechaIngreso = $_POST['fechaIngreso'];
		$activa = $_POST['activa'];


		$sql = "INSERT INTO Enfermera values(null,'$codigo','$nombre','$fechaNa','$sexo','$fechaIngreso');";
		$res = mysqli_query($conexion,$sql);

		

		if ($activa =="TRUE") { //SI ESTA ACTIVA SE AGREGA EL REGISTRO

			$turno = $_POST['turno'];
			$area = $_POST['area'];
			$desdeTurno = $_POST['desdeTurno'];
			$desdeArea = $_POST['desdeArea'];


				$select_id = mysqli_insert_id($conexion);

				$sql2 = "INSERT INTO mes_area values (null,'$desdeArea',null,$area,$select_id);";
				$res2 = mysqli_query($conexion,$sql2);

				$sql3 = "INSERT INTO mes_turno values(null,'$desdeTurno',null,'$turno',$select_id);";
				$res3 = mysqli_query($conexion,$sql3);

		}

		
		echo "1";

	
	//}	
?>