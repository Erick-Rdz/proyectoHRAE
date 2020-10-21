<?php

function graficaIncidenciasMesActual($conexion){
	$sql = " SELECT c.nombre AS 'NOMBRE', COUNT(i.id) AS NUMERO FROM incidencias i INNER JOIN catalagoincidencias c ON c.id=i.idIncidencia GROUP BY c.id";

	$resultados = mysqli_query($conexion, $sql);
	//$labels = mysqli_fetch_array($resultados);
  	$i=0;
	$data="";
	while ($row = mysqli_fetch_assoc($resultados)) {
		if ($i==0) {
			$data .= $row['NOMBRE'] .'||'.$row['NUMERO'].'||';     
		}
	}
		return $data;
}


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
		$sql = "SELECT * FROM Enfermera";
		$Enfermeras = mysqli_query($conexion, $sql);
		$res = array();
		if ($Enfermeras && mysqli_num_rows($Enfermeras)>=1){
			$res = $Enfermeras;
		}
		return $res;
}

function getTotalEnfermeras($conexion){
	$sql = "SELECT * FROM enfermera";
	$res = mysqli_num_rows(mysqli_query($conexion, $sql));
	return $res;
}

function getNumeroIncidenciasMesActual($conexion){
	$sql = "SELECT * FROM incidencias WHERE YEAR(fecha) = YEAR(CURRENT_DATE()) AND MONTH(fecha) = MONTH(CURRENT_DATE()) ";
        
	$res = mysqli_num_rows(mysqli_query($conexion, $sql));
	return $res;
}
function getNumeroIncidenciasMesAnterior($conexion){
	$sql = "SELECT * FROM incidencias WHERE YEAR(fecha) = YEAR(CURRENT_DATE()) AND MONTH(fecha) = (MONTH(CURRENT_DATE())-1) ";

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