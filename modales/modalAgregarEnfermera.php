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
              <label>Turno  </label>
              <select class="form-control input-sm" id="turno">
                <option>
                  Matutino
                </option>
                <option>
                  Vespertino
                </option>
                <option>
                  Nocturno
                </option>
                <option>
                  Jornadas Especiales
                </option>
              </select>
            </div>
          </div>
          <!--
          <div class="custom-control custom-checkbox">
            <label for="diasL">Dias Laborales</label><br>
            <input type="checkbox" class="custom-control-input" id="diasL">
            <label class="custom-control-label" for="diasL" >Lunes</label>
            <label class="custom-control-label" for="diasL" >Lunes</label>
            <label class="custom-control-label" for="diasL" >Lunes</label>
            <label class="custom-control-label" for="diasL" >Lunes</label>
            <label class="custom-control-label" for="diasL" >Lunes</label>
          </div> 
        -->
        </div>
        <div class="row">
          <div class="col-sm-4">
            <div class="form-group">
              <label>Area</label>
              <select class="form-control input-sm" id="area">
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
              <label>Fecha Ingreso</label>
              <input type="date" class="form-control" name="fecha" id="fechaIngreso" required>
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
