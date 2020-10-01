<!-- CABECERA -->
<?php
require_once 'includes/plantilla.php';

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>ENFERMERAS</title>
</head>
<body>
 <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Enfermeras</h1>
        <buttom type="buttom" class="btn btn-primary" data-toggle="modal" data-target="#agregarEnfermeraModal">Agregar</buttom>
 </div>
          <div class="card shadow mb-4" >
            <div class="card-header py-3" >
              <h6 class="m-0 font-weight-bold text-primary">Enfermeras</h6>
            </div>
            <div class="card-body" style="width: 100%; text-align: center">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Codigo</th>
                      <th>Nombre</th>
                      <th>Turno</th>
                      <th>Fecha Nacimiento</th>                      
                      <th>Sexo</th>
                      <th>Fecha Ingreso</th>
                      <th>Area</th>
                      <th>Opciones</th>
                    </tr>
                  </thead>
                  <tbody id="listadoEnfermeras">
                      <!-- AQUI SE CARGA TODO EL LISTADO DE ENFERMERAS -->
                  </tbody>
                </table>
              </div>
            </div>
          </div>


<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function () {

        loadListEnfermeras(); // carga lista de consolas

    }, false);
</script>


<?php
  require_once 'modales/modalAgregarEnfermera.php';
  require_once 'modales/modalEditarEnfermera.php';
  require_once 'modales/modalConfirmar.php';
  require_once 'includes/footer.php'; 
?>

