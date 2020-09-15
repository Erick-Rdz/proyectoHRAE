<?php
	  require_once 'includes/plantilla.php';
?>  
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="../plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="../plugins/toastr/toastr.min.css">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Incidencias</h1>
        <!--<buttom type="buttom" class="btn btn-primary" data-toggle="modal" data-target="#agregarConsolaModal">Agregar</buttom>-->
        <!--<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>-->
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

    <!-- InputMask -->
    <script src="../plugins/moment/moment.min.js"></script>
    <script src="../plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>

    <!-- SweetAlert2 -->
    <script src="../plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- Toastr -->
    <script src="../plugins/toastr/toastr.min.js"></script>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/izitoast/iziToast.min.js" type="text/javascript"></script>
    <script src="js/functions.js"></script>

    <script type="text/javascript">
    $(document).ready(function () {
      bsCustomFileInput.init();
    });

    //Page Form Advanced
    $(function () {
        //Money Euro
        $('[data-mask]').inputmask()

        const Toast = Swal.mixin({
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 3000
        });

        $('.swalDefaultSuccess').click(function() {
          Toast.fire({
            type: 'success',
            title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
          })
        });

      })
    </script>

<?php
# footer
require 'includes/footer.php'; # contiene los scripts js y logout modal.
?>