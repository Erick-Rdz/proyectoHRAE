<?php

    require_once '../includes/conexion.php';


    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];

    $query = "UPDATE Codigo SET nombre='$nombre', descripcion = '$descripcion' WHERE id=$id";

    echo $res = mysqli_query($conexion, $query);


?>