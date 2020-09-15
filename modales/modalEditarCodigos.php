<!-- Modal para agregar nuevo codigo -->
<div class="modal fade right" id="editarCodigoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">

  <div class="modal-dialog modal-full-height" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title w-100" id="myModalLabel">Actualizar Código</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form>
          <input type="text" name="id" id="idCodigo_UP" hidden>
          <label for="">Nombre</label>
          <input type="text" name="" id="nombreCodigo_UP" class="form-control input-sm">
          <label for="">Descripción</label>
          <input type="text" placeholder="Ejemplo: Enfermeria General, Especialista" name="" id="descCodigo_UP" class="form-control input-sm">
        </form>
      </div>
      <div class="modal-footer justify-content-center">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button class="btn btn-warning" data-dismiss="modal" onclick="updateCodigo();">Actualizar</button>
      </div>
    </div>
  </div>
</div>
<!-- Full Height Modal Right -->