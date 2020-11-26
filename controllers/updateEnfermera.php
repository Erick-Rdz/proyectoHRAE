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
    
	//SELECTS PARA OBTENER EL AREA Y LOS TURNOS ACTUALES
    $sql_Area = "SELECT id_area as 'ID_AREA' from mes_area where id_enfermera = $id AND fecha_salida is NULL";
    $res_area = mysqli_fetch_assoc(mysqli_query($conexion,$sql_Area));

    $sql_turno = "SELECT turno AS 'TURNO' from mes_turno where id_enfermera = $id AND fecha_salida is NULL";
    $res_turno = mysqli_fetch_assoc(mysqli_query($conexion,$sql_turno));


   if($res_area['ID_AREA']!=$area){ //VERIFICAR SÍ EL AREA ES DIFERENTE
    	$query_area = "UPDATE mes_area SET fecha_salida =(DATE_SUB(CURDATE(),INTERVAL 1 DAY)) WHERE id_enfermera = $id AND fecha_salida is NULL";
    	$res_query_area = mysqli_query($conexion,$query_area);

    	$insert_area = "INSERT INTO mes_area VALUES(null,CURDATE(),null,$area,$id);";
    	mysqli_query($conexion,$insert_area);
    }

    if ($res_turno['TURNO']!=$turno){ //VERIFICAR SÍ EL TURNO ES DIFERENTE
		$query_turno = "UPDATE mes_turno SET fecha_salida = (DATE_SUB(CURDATE(),INTERVAL 1 DAY)) WHERE id_enfermera = $id AND fecha_salida is NULL";
		$res_query_turno = mysqli_query($conexion,$query_turno);

		$insert_turno = "INSERT INTO mes_turno VALUES(null,CURDATE(),null,'$turno',$id);";
		mysqli_query($conexion,$insert_turno);	
    }



    $query = "UPDATE Enfermera SET codigo=$codigo, nombre='$nombre',fechaNac='$fechaNa', 
    sexo='$sexo', fechaIngreso='$fechaIngreso' WHERE id=$id";


    //echo $res = mysqli_query($conexion, $query);


?>