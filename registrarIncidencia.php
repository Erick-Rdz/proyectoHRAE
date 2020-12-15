<?php
	  require_once 'includes/plantilla.php';
?>  

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Incidencias</h1>
    </div>

    <div id="" class="row">
        <div class="container-fluid">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Registro</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nombre *</label>
                        <select id="buscadorEnfermera" class="form-control input-sm" >
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
                        <label>Incidencia *</label>                        
                        <select id="buscadorIncidencia" class="form-control input-sm">
                          <option selected="Seleccionar" value="0"></option>
                        <?php 
                            $incidencias = getCatalagoIncidencias($conexion); 
                              if (!empty($incidencias)):
                                while($incidencia = mysqli_fetch_assoc($incidencias)):
                        ?>
                                  <option value="<?=$incidencia['id']?>"><?=$incidencia['nombre'];?>
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
                        <label>Fecha *</label>
                        <input type="date" class="form-control" name="fecha" required id="fechaInicio"> 
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Fecha Fin(opcional)</label>
                        <input type="date" class="form-control" name="fechaFin" id="fechaFin"> 
                      </div>
                    </div>
                 	<div class="col-sm-4">
                      <div class="form-group">
                        <label>Cubre Enfermera (opcional)</label>
                        <select id="buscadorEnfermera2" class="form-control input-sm">
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
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" id="btn_RegistrarIncidencia" onclick="registrarIncidencia();">Registrar</button>
                </div>
            </div>
            <!-- /.card -->
      </div><!-- /.container-fluid -->
        <!-- FIN -->
    </div>


<script type="text/javascript">
  $(document).ready(function(){
      $('#buscadorEnfermera').select2();
  });
  $(document).ready(function(){
      $('#buscadorIncidencia').select2();
  });
  
  $(document).ready(function(){
      $('#buscadorEnfermera2').select2();
  });
</script>


<?php
# footer
require 'includes/footer.php'; # contiene los scripts js y logout modal.
?>
