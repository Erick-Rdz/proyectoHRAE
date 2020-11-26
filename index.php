<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PROYECTO</title>
</head>
<body>
	<!-- CABECERA -->
	<?php 

 	  require_once 'includes/plantilla.php';

	?>

  <script type="text/javascript" src="vendor/chart.js/Chart.min.js"></script>
  <script type="text/javascript" src="js/graficaIndex.js"></script>
<!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Inicio</h1>

            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>

          <div class="row">
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Enfermeras Registradas</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      <?php echo getTotalEnfermeras($conexion)?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Incidencias Este Mes:</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      <?php echo getNumeroIncidenciasMesActual($conexion)?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Mes Anterior</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                            <?php echo getNumeroIncidenciasMesAnterior($conexion); ?></div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Areas registradas</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php echo getTotalAreas($conexion); ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>


</head>
<body>



<div id="" class="chart-container" style="position: relative; height:70vh; width:55vw">
      <center><h1 class="h3 mb-0 text-gray-800">Tabla Distribucion Enfermeras Mes Actual</h1></center><br>
    <canvas id="myChart"></canvas>
</div>

<script type="text/javascript">
  
</script>
<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function () {
        graficaIndex('<?php echo json_encode(graficaIncidenciasMesActual($conexion)); ?>'); // carga la grafica principal del index
    }, false);
</script>

<?php
  require_once 'includes/footer.php'; 
?>