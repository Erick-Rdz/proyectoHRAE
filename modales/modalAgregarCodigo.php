<!-- Modal para agregar nuevo codigo -->
<div class="modal fade right" id="agregarCodigoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">

  <div class="modal-dialog modal-full-height" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title w-100" id="myModalLabel">Registrar Código</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form >
          <label for="">Código</label>
          <input type="text" name="" id="nombreCodigo" class="form-control input-sm">
          <label for="">Descripcion</label>
          <input type="text" placeholder="Ejemplo: Enfermeria General, Especialista" name="" id="descripcion" class="form-control input-sm">
        </form>
      </div>
      <div class="modal-footer justify-content-center">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button class="btn btn-primary" data-dismiss="modal" onclick="agregarCodigo();">Guardar</button>
      </div>
    </div>
  </div>
</div>
<!-- Full Height Modal Right -->