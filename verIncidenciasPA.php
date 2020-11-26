<?php
  include 'includes/plantilla.php';

?>

 <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Incidencias Por Area</h1>
        <!--<buttom type="buttom" class="btn btn-primary" data-toggle="modal" data-target="#agregarAreaModal">Agregar</buttom>-->
 </div>
        <div id="" class="row">
        <div class="container-fluid">
            <!-- general form elements -->
            <div class="card card-primary">
              <!-- form start -->
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Area </label>
                        <select id="buscadorAreaPA" class="form-control input-sm" onchange="loadListIncidenciasPA();">
                          <option selected="Seleccionar" value="0"></option>
                        <?php 
                            $areas = getAreas($conexion); 
                              if (!empty($areas)):
                                while($area = mysqli_fetch_assoc($areas)):
                        ?>
                                  <option value="<?=$area['id']?>"><?=$area['nombre'];?>
                                  </option>
                        <?php 
                                endwhile; 
                              endif;  
                        ?>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Año</label>                        
                        <input type="text" name="year" class="form-control input-sm" id="yearPA">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <button class="btn btn-primary" style="margin-top:10%" onclick="loadListIncidenciasPA();">Filtrar</button>
                      </div>
                    </div>
            <div class="card-body">
              <table class="table table-bordered table-hover">
                
                <tbody id="listadoIncidenciasPA">
                    <!-- LISTADO DE AREAS -->
                </tbody>
            </div>
        </table>
    </div>



<script type="text/javascript">
    $(document).ready(function(){
      $('#buscadorAreaPA').select2();

  });
/*
      height: calc(1.5em + 0.5rem + 2px);
  padding: 0.25rem 0.5rem;
  font-size: 0.875rem;
  line-height: 1.5;
  border-radius: 0.2rem;*/
</script>

<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function () {

        loadListIncidenciasPA(); // carga lista de consolas

    }, false);
</script>

<?php
  require_once 'modales/modalAgregarAreas.php';
  require_once 'modales/modalEditarAreas.php';
  require_once 'modales/modalConfirmar.php';
  require_once 'includes/footer.php'; 
?>

