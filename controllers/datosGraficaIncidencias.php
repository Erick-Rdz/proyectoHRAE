<?php

require_once '../includes/conexion.php';



	$fecha =$_GET['fecha'];
	
	$sql = "SELECT COUNT(i.ID) AS'NUMERO', c.nombre as 'NOMBRE' FROM incidencias i INNER JOIN catalagoincidencias c ON c.id = i.idIncidencia WHERE MONTH(i.fecha) = MONTH('$fecha')  AND YEAR(i.fecha) = YEAR('$fecha') GROUP BY i.idIncidencia";

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