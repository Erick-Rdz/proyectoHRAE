<?php

    require_once '../includes/conexion.php';


    $id = $_POST['id'];
    $nombre = $_POST['nombre'];

    $query = "UPDATE Area SET nombre='$nombre' WHERE id=$id";

    echo $res = mysqli_query($conexion, $query);


?>