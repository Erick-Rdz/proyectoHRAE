<?php

require_once '../includes/conexion.php';



	$fecha =$_GET['fecha'];
	


	$sql = "SELECT a.nombre AS'NOMBRE', count(m.id) AS 'NUMERO' from mes_area m INNER JOIN area a ON a.id = m.id_area where '$fecha' BETWEEN m.fecha_entrada and m.fecha_salida OR '$fecha' >=m.fecha_entrada AND m.fecha_salida is NULL   OR MONTH('$fecha') = MONTH(m.fecha_entrada) AND YEAR('$fecha') = YEAR(m.fecha_entrada) GROUP BY m.id_area";

	$resultados = mysqli_query($conexion, $sql);
  	$i=0;
	$data="";
	while ($row = mysqli_fetch_assoc($resultados)) {
		if ($i==0) {
			$data .= $row['NOMBRE'] .'||'.$row['NUMERO'].'||';     
		}
	}

		echo json_encode($data);



?>