
<!-- Modal para agregar nueva area -->
<div class="modal fade right" id="agregarRegistroTurnoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">

  <div class="modal-dialog modal-full-height" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title w-100" id="myModalLabel">Agregar Registro Turno</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <label for="nombre">Fecha Inicio   (DIA PRIMERO DEL MES)</label>
          <input type="date" name="nombre" id="fechaInicioRegistroTurno" class="form-control input-sm" required> 
          <label for="nombre">Fecha Fin   (DIA ULTIMO DEL MES ANTERIOR)</label>
          <input type="date" name="nombre" id="fechaFinRegistroTurno" class="form-control input-sm" required> 
          <label>Turno</label><br>
              <select class="form-control input-sm" id="turnoRegistroTurno">
                <option value="MATUTINO">
                  MATUTINO
                </option>
                <option value="VESPERTINO">
                  VESPERTINO
                </option>
                <option value="NOCTURNO A">
                  NOCTURNO A
                </option>
                  <option value="NOCTURNO B">
                  NOCTURNO B
                </option>
                <option value="NOCTURNO MIXTO">
                  NOCTURNO MIXTO
                </option>
                <option value="SEXTA VELADA">
                  SEXTA VELADA
                </option>
                  <option value="JORNADAS ESPECIALES">
                  JORNADAS ESPECIALES
                </option>     
              </select>
              <label>Enfermera</label>
                        <select id="enfermeraRegistroTurno" class="form-control input-sm" >
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
        <button class="btn btn-primary" data-dismiss="modal" id="" onclick="agregarRegistroTurno();">Guardar</button>
      </div>
    </div>
  </div>
</div>



<!-- Full Height Modal Right -->
