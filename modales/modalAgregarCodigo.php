<!-- Modal para agregar nueva area -->
<div class="modal fade right" id="agregarAreaModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">

  <div class="modal-dialog modal-full-height" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title w-100" id="myModalLabel">Registrar Codigo</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form method="POST" action="agregarArea.php">
          <label for="">Nombre</label>
          <input type="text" name="" id="numeroAdd" class="form-control input-sm">
          <label for="">Descripcon</label>
          <input type="text" placeholder="Ejemplo: Enfermeria General, Especialista" name="" id="numeroAdd" class="form-control input-sm">
        </form>
      </div>
      <div class="modal-footer justify-content-center">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button class="btn btn-primary" data-dismiss="modal" tar>Guardar</button>
      </div>
    </div>
  </div>
</div>
<!-- Full Height Modal Right -->