<?php

require_once '../includes/conexion.php';

	$fecha =$_GET['fecha'];
	

	$sql = "SELECT turno as 'TURNO', COUNT(id) AS 'NUMERO' FROM mes_turno   WHERE '$fecha' BETWEEN fecha_entrada and fecha_salida OR '$fecha' >=fecha_entrada AND fecha_salida is NULL   OR MONTH('$fecha') = MONTH(fecha_entrada) AND YEAR('$fecha') = YEAR(fecha_entrada) GROUP BY TURNO";

	$resultados = mysqli_query($conexion, $sql);
  	$i=0;
	$data="";
	while ($row = mysqli_fetch_assoc($resultados)) {
		if ($i==0) {
			$data .= $row['TURNO'] .'||'.$row['NUMERO'].'||';     
		}
	}

		echo json_encode($data);



?>