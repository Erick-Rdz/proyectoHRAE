<!-- Modal para agregar nueva area -->
<div class="modal fade right" id="editarAreaModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">

  <div class="modal-dialog modal-full-height" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title w-100" id="myModalLabel">Actualizar Area</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="text" name="" id="idArea" hidden="">
        <form method="POST" action="agregarArea.php">
          <input type="text" name="id" id="idArea_UP" hidden>
          <label for="nombre">Nombre</label>
          <input type="text" name="nombre" id="nombreArea_UP" class="form-control input-sm">
        </form>
      </div>
      <div class="modal-footer justify-content-center">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button class="btn btn-warning" data-dismiss="modal" id="actualizarArea" onclick="updateArea();">Actualizar</button>
      </div>
    </div>
  </div>
</div>
<!-- Full Height Modal Right -->
