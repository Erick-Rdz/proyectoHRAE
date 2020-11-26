<?php
  include 'includes/plantilla.php';

?>

 <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Incidencias Por Turno</h1>
        <!--<buttom type="buttom" class="btn btn-primary" data-toggle="modal" data-target="#agregarturnoModal">Agregar</buttom>-->
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
                        <label>turno </label>
                        <select id="buscadorturnoPT" class="form-control input-sm" onchange="loadListIncidenciasPT();">
                          <option selected="Seleccionar" value="0"></option>
                          <option>
                            MATUTINO
                          </option>
                          <option>
                            VESPERTINO
                          </option>
                          <option>
                            NOCTURNO A
                          </option>
                            <option>
                            NOCTURNO B
                          </option>
                          <option>
                            NOCTURNO MIXTO
                          </option>
                          <option>
                            SEXTA VELADA
                          </option>
                            <option>
                            JORNADAS ESPECIALES
                          </option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label>Año</label>                        
                        <input type="text" name="year" class="form-control input-sm" id="yearPT">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <button class="btn btn-primary" style="margin-top:10%" onclick="loadListIncidenciasPT();">Filtrar</button>
                      </div>
                    </div>
            <div class="card-body">
              <table class="table table-bordered table-hover">
                
                <tbody id="listadoIncidenciasPA">
                    <!-- LISTADO DE turnos -->
                </tbody>
            </div>
        </table>
    </div>
  </div>





<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function () {

        loadListIncidenciasPT(); // carga lista de consolas

    }, false);
</script>

<?php

  require_once 'includes/footer.php'; 
?>

