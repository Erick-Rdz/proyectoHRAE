<!-- Modal para agregar nueva consola -->
<div class="modal fade right" id="agregarEnfermeraModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">

  <div class="modal-dialog modal-full-height" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title w-100" id="myModalLabel">Registrar Enfermera</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <label for="">CODIGO</label>
          <select class="form-control input-sm">
            <option>
              A123123
            </option>
          </select>
          <label for="">Nombre Completo</label>
          <input type="text" name="" id="numeroAdd" class="form-control input-sm">
          <label for="select">Turno</label>
          <select class="form-control input-sm">
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

          <label for="">Hora Entrada</label>
          <input type="time" name="" class="form-control input-sm" style="display: flex">
          <label for="">Hora Salida</label>
          <input type="time" name="" class="form-control input-sm" style="display: flex">

          <label for="select">Area</label>
          <select class="form-control input-sm">
            <option>
              EJEJMPLO
            </option>
          </select>
          <br>
          <label for="">Fecha de Ingreso</label>
          <input type="date" name="" class="form-control input-sm">
      </div>
      <div class="modal-footer justify-content-center">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button id="agregarConsolaBtn" type="button" class="btn btn-primary" data-dismiss="modal">Guardar</button>
      </div>
    </div>
  </div>
</div>
<!-- Full Height Modal Right -->