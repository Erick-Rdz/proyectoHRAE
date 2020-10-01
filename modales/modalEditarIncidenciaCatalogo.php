<!-- Modal para agregar nueva incidencia -->
<div class="modal fade right" id="editarIncidenciaCatalogo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">

  <div class="modal-dialog modal-full-height" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title w-100" id="myModalLabel">Editar Incidencia</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form >
          <input type="" name="id" id="idCatalogo_UP" hidden>
          <label for="">Nombre</label>
          <input type="text" name="" id="nombreCatalago_UP" class="form-control input-sm">
        </form>
      </div>
      <div class="modal-footer justify-content-center">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button class="btn btn-warning" data-dismiss="modal" onclick="updateCatalago();">Guardar</button>
      </div>
    </div>
  </div>
</div>
<!-- Full Height Modal Right -->