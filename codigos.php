<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Codigos</title>
</head>
<body>
	<!-- CABECERA -->
	<?php 

 	require_once 'includes/plantilla.php';

	?>
 <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Codigos</h1>
        <buttom type="buttom" class="btn btn-primary" data-toggle="modal" data-target="#agregarAreaModal">Agregar</buttom>
        <!--<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>-->
 </div>



<?php

	require 'modales/modalAgregarCodigo.php';
	require_once 'includes/footer.php'; 

?>