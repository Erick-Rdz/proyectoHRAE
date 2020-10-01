<?php
	  require_once 'includes/plantilla.php';
?>  

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Incidencias</h1>
    </div>

    <div id="listadoConsolas" class="row">
        <div class="container-fluid">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Registro</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="controllers/addDulceria.php" method="post"  enctype="multipart/form-data">
                <div class="card-body">

                  <div class="row">
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nombre</label>
                        <select class="form-control input-sm" >
                        	<option>
                          Seleccionar..
                     	   	</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Incidencia</label>
                        
                        <select class="form-control input-sm">
                        	<option>
                        		Seleccionar..
                        	</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Fecha Inicio</label>
                        <input type="date" class="form-control" name="fecha" required> 
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Fecha Fin(opcional)</label>
                        <input type="date" class="form-control" name="fechaFin" > 
                      </div>
                    </div>
                 	<div class="col-sm-4">
                      <div class="form-group">
                        <label>Cubre Enfermera (opcional)</label>
                        <select class="form-control input-sm">
                        	<option>
                            Seleccionar..
                        	</option>
                        </select>
                      </div>
                    </div>
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Registrar</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
      </div><!-- /.container-fluid -->
        <!-- Aqui se carga la lista de consolas desde components/listarConsolasCards.php -->
    </div>

<?php
# footer
require 'includes/footer.php'; # contiene los scripts js y logout modal.
?>