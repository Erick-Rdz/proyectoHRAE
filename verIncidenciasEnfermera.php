<?php
  include 'includes/plantilla.php';

?>

 <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Incidencias Enfermeras</h1>
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
                        <label>Enfermera </label>
                        <select id="buscadorEnfermeraPY" class="form-control input-sm" onchange="loadListIncidenciasPorEnfermera();" >
                          <option selected="Seleccionar" value="0"></option>
                        <?php 
                            $enfermeras = getEnfermeras($conexion); 
                              if (!empty($enfermeras)):
                                while($enfermera = mysqli_fetch_assoc($enfermeras)):
                        ?>
                                  <option value="<?=$enfermera['id']?>"><?=$enfermera['nombre'];?>
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
                        <input type="text" name="year" class="form-control input-sm" id="yearPY">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <button class="btn btn-primary" style="margin-top:10%" onclick="loadListIncidenciasPorEnfermera();">Filtrar</button>
                      </div>
                    </div>
            <div class="card-body">
              <table class="table table-bordered table-hover">
                
                <tbody id="listadoIncidenciasPY">
                    <!-- LISTADO DE AREAS -->
                </tbody>
            </div>
        </table>
    </div>



<script type="text/javascript">
    $(document).ready(function(){
      $('#buscadorEnfermeraPY').select2();
  });
</script>

<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function () {

        loadListIncidenciasPorEnfermera(); // carga lista de consolas

    }, false);
</script>

<?php
  require_once 'modales/modalAgregarAreas.php';
  require_once 'modales/modalEditarAreas.php';
  require_once 'modales/modalConfirmar.php';
  require_once 'includes/footer.php'; 
?>

