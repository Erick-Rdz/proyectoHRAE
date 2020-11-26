<?php
require_once '../includes/conexion.php';
require_once '../includes/funciones.php';

if($_GET['TurnoPT'] && $_GET['YearPT']){

  $year = $_GET['YearPA'];
  $turno= $_GET['TurnoPT'];

  $sqlC = "SELECT i.id,c.nombre, e.nombre,a.nombre,i.fecha, i.fechaFin,o.nombre FROM incidencias i INNER JOIN enfermera e ON e.id = i.enfermera INNER JOIN catalagoIncidencias c ON c.id = i.idIncidencia LEFT JOIN enfermera o ON o.id = i.cubreEnfermera INNER JOIN area a ON a.id = e.area WHERE  YEAR(i.fecha) = $year AND e.turno = '$turno'";
}else if($_GET['TurnoPT'] ){

    $turno= $_GET['TurnoPT'];
    $sqlC = "SELECT i.id,c.nombre, e.nombre,a.nombre,i.fecha, i.fechaFin,o.nombre FROM incidencias i INNER JOIN enfermera e ON e.id = i.enfermera INNER JOIN catalagoIncidencias c ON c.id = i.idIncidencia LEFT JOIN enfermera o ON o.id = i.cubreEnfermera INNER JOIN area a ON a.id = e.area WHERE e.turno = '$turno'";
}else{
   $sqlC = "SELECT i.id,c.nombre, e.nombre,a.nombre,i.fecha, i.fechaFin,o.nombre FROM incidencias i INNER JOIN enfermera e ON e.id = i.enfermera INNER JOIN catalagoIncidencias c ON c.id = i.idIncidencia LEFT JOIN enfermera o ON o.id = i.cubreEnfermera INNER JOIN area a ON a.id = e.area";
}


$resultC = mysqli_query($conexion, $sqlC);
if ($resultC) 
$numeroResultados = mysqli_num_rows($resultC);
else
$numeroResultados =0;
?> 
<td colspan="7"> Resultados: <?php echo $numeroResultados?> </td>
<thead>
                <tr>
                  <th>Incidencia</th>
                  <th>Enfermera</th>
                  <th>Area</th>
                  <th>Fecha</th>
                  <th>Fecha Fin</th>
                  <th>Cubre:</th>
                  <th >Eliminar</th>
                </tr>
                </thead>
<?php

if ($resultC) 
while ($row = mysqli_fetch_row($resultC)) { // por cada fila itera

    $data = $row[0]."||".$row[1]."||".$row[2]."||".$row[3]."||".$row[4]."||".$row[5]."||".$row[6];
    ?>  

                <tr>                  
                  <td><?php echo $row[1]; ?></td>
                  <td><?php echo $row[2]; ?></td>
                  <td><?php echo $row[3]; ?></td>
                  <td><?php echo $row[4]; ?></td>
                  <?php if($row[5]=='0000-00-00'){?>
                  <td><?php echo 'NO EXISTE'; ?></td>
                  <?php }else{ ?>
                  <td><?php echo $row[5]; ?></td>
                  <?php } ?>
                  <td><?php echo $row[6]; ?></td>

                  <td>
                    <!--<buttom type="buttom" class="btn btn-warning" data-toggle="modal" data-target="#"
                    onclick="cargaDataArea('<?php echo $data ?>')">Editar</buttom>-->
                    <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#confirmarEliminacion"
                    onclick="eliminarIncidencia('<?php echo $row[0] ?>')">Eliminar</button>
                    
                  </td>
                </tr>

    <?php

      }// termina el ciclo


?>