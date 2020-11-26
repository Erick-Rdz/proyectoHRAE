<!-- CABECERA -->
<?php
require_once 'includes/plantilla.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>AREAS</title>
</head>
<body>

 <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Areas</h1>
        <buttom type="buttom" class="btn btn-primary" data-toggle="modal" data-target="#agregarAreaModal">Agregar</buttom>
 </div>

    <div class="row"> <!-- TABLA DE AREAS -->
        <div class="card" style="width: 100%; text-align: center">
            <div class="card-body">
              <table class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Nombre</th>
                  <!--<th>Enfermeras</th>-->
                  <th >Opciones</th>
                </tr>
                </thead>
                <tbody id="listadoAReas">
                    <!-- LISTADO DE AREAS -->
                </tbody>
            </div>
              </table>
           </div>
        </div>
    </div>
<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function () {

        loadListAreas(); // carga lista de consolas

    }, false);
</script>

<?php
	require_once 'modales/modalAgregarAreas.php';
  require_once 'modales/modalEditarAreas.php';
  require_once 'modales/modalConfirmar.php';
	require_once 'includes/footer.php'; 
?>

