<?php



function getCodigos($conexion){
	$sql = "SELECT * FROM codigo";
		$codigos = mysqli_query($conexion, $sql);
		$res = array();
		if ($codigos && mysqli_num_rows($codigos)>=1){
			$res = $codigos;
		}
		return $res;
}

function getAreas($conexion){
	$sql = "SELECT * FROM area";
		$codigos = mysqli_query($conexion, $sql);
		$res = array();
		if ($codigos && mysqli_num_rows($codigos)>=1){
			$res = $codigos;
		}
		return $res;
}

function getCatalagoIncidencias($conexion){
		$sql = "SELECT * FROM catalagoIncidencias";
		$codigos = mysqli_query($conexion, $sql);
		$res = array();
		if ($codigos && mysqli_num_rows($codigos)>=1){
			$res = $codigos;
		}
		return $res;
}


function getEnfermeras($conexion){
		$sql = "SELECT e.id,c.nombre as 'codigo',e.nombre,e.turno,CONCAT(e.horaEntrada,' || ',e.horaSalida)as horario,a.nombre as 'area',e.fechaIngreso from area a INNER JOIN enfermera e ON e.area = a.id INNER JOIN codigo c on c.id = e.codigo ";

		$codigos = mysqli_query($conexion, $sql);
		$res = array();
		if ($codigos && mysqli_num_rows($codigos)>=1){
			$res = $codigos;
		}
		return $res;
}

function getTotalEnfermeras($conexion){
	$sql = "SELECT * FROM enfermera";
	$res = mysqli_num_rows(mysqli_query($conexion, $sql));
	return $res;
}

function getNumeroIncidencias($conexion){
	$sql = "SELECT * FROM incidencias 
        WHERE fecha = YEAR(CURRENT_DATE()) 
        AND fecha  = MONTH(CURRENT_DATE())";
	$res = mysqli_num_rows(mysqli_query($conexion, $sql));
	return $res;
}
function getNumeroIncidenciasMesAnterior($conexion){
	$sql = "SELECT * FROM incidencias 
        WHERE fecha = YEAR(CURRENT_DATE()) 
        AND fecha  = MONTH(CURRENT_DATE())";
	$res = mysqli_num_rows(mysqli_query($conexion, $sql));
	return $res;
}

function getTotalAreas($conexion){
	$sql = "SELECT * FROM area";
	$res = mysqli_num_rows(mysqli_query($conexion, $sql));
	return $res;
}

function getEnfermerasArea($conexion,$area){

	$sql = "SELECT * FROM enfermera WHERE area = $area";
	$res = mysqli_num_rows(mysqli_query($conexion,$sql));
	return $res;
}











?>