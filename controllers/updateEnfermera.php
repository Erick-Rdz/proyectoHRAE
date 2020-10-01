<?php

    require_once '../includes/conexion.php';



    $id = $_POST['idEnfermera'];
    $codigo = $_POST['codigo'];
	$nombre = $_POST['nombre'];
	$fechaNa = $_POST['fechaNa'];
	$sexo = $_POST['sexo'];
	$turno = $_POST['turno'];
	$area = $_POST['area'];
	$fechaIngreso = $_POST['fechaIngreso'];
    

    $query = "UPDATE Enfermera SET codigo=$codigo, nombre='$nombre',fechaNac='$fechaNa', 
    sexo='$sexo', turno='$turno', area=$area, fechaIngreso='$fechaIngreso' WHERE id=$id";

    echo $res = mysqli_query($conexion, $query);


?>