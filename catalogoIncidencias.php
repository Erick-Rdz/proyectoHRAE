<!-- CABECERA -->
<?php 
require_once 'includes/plantilla.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Catalogo Incidencias</title>
</head>
<body>

 <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Catalogo Incidencias</h1>
        <buttom type="buttom" class="btn btn-primary" data-toggle="modal" data-target="#agregarIncidenciaCatalago">Agregar</buttom>
 </div>


        <div class="card" style="width: 100%; text-align: center;">
            <div class="card-body">
              <table class="table table-bordered table-hover">
                <thead>
                  <th>Nombre</th>
                  <th>Opciones</th>
                </thead>
                <tbody id="listadoCatalago">
                    <!-- AQUI SE LISTAN LAS INCIDENCIAS QUE EXISTEN -->
                </tbody>
              </table>
            </div>
          </div>


<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function () {

        loadListCatalago(); // carga lista de consolas

    }, false);
</script>

<?php
	require_once 'modales/modalAgregarIncidencia.php';
  require_once 'modales/modalEditarIncidenciaCatalogo.php';
  require_once 'modales/modalConfirmar.php';
	require_once 'includes/footer.php'; 
?>
