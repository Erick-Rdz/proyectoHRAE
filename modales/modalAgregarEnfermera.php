<!-- Modal para agregar nueva area -->
<div class="modal fade right" id="agregarEnfermeraModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">

  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title w-100" id="myModalLabel">Registrar Enfermera</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-4">
            <!-- text input -->
            <div class="form-group">
              <label>Codigo</label>
              <select class="form-control input-sm" id="codigoEnfermera">
                <?php 
                    $codigos = getCodigos($conexion); 
                      if (!empty($codigos)):
                        while($codigo = mysqli_fetch_assoc($codigos)):
                ?>
                          <option value="<?=$codigo['id']?>"><?=$codigo['nombre'];?>
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
              <label>Nombre Completo</label>
              <input type="text" class="form-control" name="fecha" id="nombreEnfermera" required> 
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <label>Fecha de Nacimiento</label>
              <input type="date" class="form-control" name="fecha" id="fechaNa" required> 
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <label>Sexo</label>
              <select class="form-control input-sm" id="sexo">
                <option>
                  Masculino
                </option>
                <option>
                  Femenino
                </option>
              </select>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <label>Fecha Ingreso</label>
              <input type="date" class="form-control" name="fecha" id="fechaIngreso" required>
            </div>
          </div>
          <div>
          <div class="col-sm-4">
              <label style="color: red">Estatus</label><br>
             <div class="custom-control custom-switch">
                  <input type="checkbox" class="custom-control-input" id="switchActivo">
                  <label class="custom-control-label" for="switchActivo" onclick="ActivarSelected();">Activa</label>
              </div>
          </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <div class="form-group">
              <label>Area</label>
              <select class="form-control input-sm" id="area" disabled="">
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
              <label>Desde:</label>
              <input type="date" class="form-control" name="fecha" id="desdeArea" disabled="">               
            </div>
          </div>

        </div>
        <div class="row">
          <div class="col-sm-4">
            <div class="form-group">
              <label>Turno  </label>
              <select class="form-control input-sm" id="turno" disabled="">
                <option>
                  MATUTINO
                </option>
                <option>
                  VESPERTINO
                </option>
                <option>
                  NOCTURNO A
                </option>
                  <option>
                  NOCTURNO B
                </option>
                <option>
                  NOCTURNO MIXTO
                </option>
                <option>
                  SEXTA VELADA
                </option>
                  <option>
                  JORNADAS ESPECIALES
                </option>
              </select>        
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <label>Desde:</label>
              <input type="date" class="form-control" name="fecha" id="desdeTurno" disabled="">               
            </div>
          </div>

        </div>
      </div>
      <div class="modal-footer justify-content-center">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button id="agregarConsolaBtn" type="button" class="btn btn-primary" data-dismiss="modal" onclick="agregarEnfermera();">Guardar</button>
      </div>
    </div>
  </div>
</div>
<!-- Full Height Modal Right -->

<script type="text/javascript">
  var activos = false;
  function ActivarSelected(){
    if (activos==false) {
        $('#turno').prop('disabled', false);
        $('#desdeArea').prop('disabled', false);
        $('#area').prop('disabled', false);
        $('#desdeTurno').prop('disabled', false);
        activos = true;
    }else{

       $('#turno').attr('disabled', 'disabled');
        $('#desdeArea').attr('disabled', 'disabled');
        $('#area').attr('disabled', 'disabled');
        $('#desdeTurno').attr('disabled', 'disabled');
        activos = false;
    }
    

  }
</script>

