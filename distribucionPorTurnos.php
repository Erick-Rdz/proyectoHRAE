<?php
  include 'includes/plantilla.php';

?>
  <script type="text/javascript" src="js/graficaDistribucionTurnos.js"></script>
 <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Distribucion Por Turnos</h1>
        <!--<buttom type="buttom" class="btn btn-primary" data-toggle="modal" data-target="#agregarAreaModal">Agregar</buttom>-->
 </div>
        <div id="" class="row">
        <div class="container-fluid">
            <!-- general form elements -->
            <div class="card card-primary">
              <!-- form start -->
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Mes</label>
                        <select id="mesFiltro" class="form-control input-sm">
                          <option value="1">ENERO</option>
                          <option value="2">FEBRERO</option>
                          <option value="3">MARZO</option>
                          <option value="4">ABRIL</option>
                          <option value="5">MAYO</option>
                          <option value="6">JUNIO</option>
                          <option value="7">JULIO</option>
                          <option value="8">AGOSTO</option>
                          <option value="9">SEPTIEMBRE</option>
                          <option value="10">OCTUBRE</option>
                          <option value="11">NOVIEMBRE</option>
                          <option value="12">DICIEMBRE</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <!-- text input -->
                      <div class="form-group">
                       <label for="yearFiltro">Año</label>
                        <input type="text" name="" id="yearFiltro" class="form-control input-sm">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <button class="btn btn-primary" style="margin-top:10%" onclick="ObtenerDatosPorTurno();">Filtrar</button>
                      </div>
                    </div>
                      <div id="" class="chart-container" style="height:40vh; width:40vw; margin-left: 20%">
                        <canvas id="myChart"></canvas>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <tbody id="listadoDistribucionTurnos" style="width: 50px; text-align: center">
                            <!-- LISTADO DE TURNOS -->
                            </tbody>
                        </table>
                    </div>
                </div>  



<?php
  require_once 'includes/footer.php'; 
?>

