
<!-- Modal para agregar nueva area -->
<div class="modal fade right" id="agregarRegistroAreaModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">

  <div class="modal-dialog modal-full-height" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title w-100" id="myModalLabel">Agregar Registro Area</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <label for="nombre">Fecha Inicio   (DIA PRIMERO DEL MES)</label>
          <input type="date" name="nombre" id="fechaInicioRegistroArea" class="form-control input-sm" required> 
          <label for="nombre">Fecha Fin   (DIA ULTIMO DEL MES ANTERIOR)</label>
          <input type="date" name="nombre" id="fechaFinRegistroArea" class="form-control input-sm" required> 
          <label>Area</label><br>
              <select class="form-control input-sm" id="areaRegistroArea">
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
              <label>Enfermera</label>
                        <select id="enfermeraRegistroArea" class="form-control input-sm" >
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
        </form>
      </div>
      <div class="modal-footer justify-content-center">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" >Cancelar</button>
        <button class="btn btn-primary" data-dismiss="modal" id="" onclick="agregarRegistroArea();">Guardar</button>
      </div>
    </div>
  </div>
</div>



<!-- Full Height Modal Right -->
