
<!-- Modal para agregar nueva area -->
<div class="modal fade right" id="agregarAreaModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">

  <div class="modal-dialog modal-full-height" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title w-100" id="myModalLabel">Registrar Area</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <label for="nombre">Nombre</label>
          <input type="text" name="nombre" id="nombreArea" class="form-control input-sm" required> 
        </form>
      </div>
      <div class="modal-footer justify-content-center">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" >Cancelar</button>
        <button class="btn btn-primary" data-dismiss="modal" id="guardarAreaBoton" onclick="agregarArea();">Guardar</button>
      </div>
    </div>
  </div>
</div>
<!-- Full Height Modal Right -->
