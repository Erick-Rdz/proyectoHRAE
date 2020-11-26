<!-- Modal para agregar nueva incidencia -->
<div class="modal fade right" id="agregarIncidenciaCatalago" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">

  <div class="modal-dialog modal-full-height" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title w-100" id="myModalLabel">Registrar Incidencia</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
          <label for="">Nombre</label>
          <input type="text" name="" class="form-control" id="nombreCatalago">
          </div>

        </form>
      </div>
      <div class="modal-footer justify-content-center">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button class="btn btn-primary" data-dismiss="modal" onclick="agregarCatalago();">Guardar</button>
      </div>
    </div>
  </div>
</div>
<!-- Full Height Modal Right -->