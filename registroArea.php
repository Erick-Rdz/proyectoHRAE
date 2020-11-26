
<!-- CABECERA -->
<?php 
require_once 'includes/plantilla.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Códigos</title>
</head>
<body>
 <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Registros Area</h1>
        <buttom type="buttom" class="btn btn-primary" data-toggle="modal" data-target="#agregarRegistroAreaModal">Agregar</buttom>

 </div>

<div class="row">
        <div class="card" style="width: 100%; text-align: center">
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ENFERMERA</th>
                  <th>FECHA ENTRADA</th>
                  <th>FECHA SALIDA</th>
                  <th>AREA</th>
                  <th>OPCIONES</th>
                </tr>
                </thead>
                <tbody id="listadoRegistros">
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
</div>


<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function () {

        loadlistRegistrosAreas(); // carga lista de consolas

    }, false);
</script>


<?php
	require_once 'modales/modalRegistroArea.php';
  	require_once 'modales/modalEditarCodigos.php';
  	require_once 'modales/modalConfirmar.php';
	require_once 'includes/footer.php'; 
?>