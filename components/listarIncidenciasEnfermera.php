<?php
require_once '../includes/conexion.php';
require_once '../includes/funciones.php';

if($_GET['enfermeraPY'] && $_GET['YearPY']){
    $year = $_GET['YearPY'];
    $enfermera= $_GET['enfermeraPY'];

    $sqlC = "SELECT i.id,c.nombre,e.nombre,i.fecha,i.fechafin,e.id,o.nombre from incidencias i INNER JOIN catalagoIncidencias C ON i.idIncidencia = c.id INNER JOIN enfermera e ON e.id =i.enfermera LEFT JOIN enfermera o ON o.id = i.cubreEnfermera WHERE e.id = $enfermera AND YEAR(i.fecha) = $year ORDER BY i.id;";

}else if($_GET['enfermeraPY']){

    $enfermera= $_GET['enfermeraPY'];
    $sqlC = "SELECT i.id,c.nombre,e.nombre,i.fecha,i.fechafin,e.id,o.nombre from incidencias i INNER JOIN catalagoIncidencias C ON i.idIncidencia = c.id INNER JOIN enfermera e ON e.id =i.enfermera LEFT JOIN enfermera o ON o.id = i.cubreEnfermera WHERE e.id = $enfermera ORDER BY i.id;";

}else{
  
    $sqlC = "SELECT i.id,c.nombre,e.nombre,i.fecha,i.fechafin,e.id,o.nombre from incidencias i INNER JOIN catalagoIncidencias C ON i.idIncidencia = c.id INNER JOIN enfermera e ON e.id =i.enfermera LEFT JOIN enfermera o ON o.id = i.cubreEnfermera ORDER BY i.id ";
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
                  <!--<th>Area</th>-->
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
                  <!--<?php if($row[5]=='0000-00-00'){?>
                  <td><?php echo 'NO EXISTE'; ?></td>
                  <?php }else{ ?>
                  <td><?php echo $row[5]; ?></td>
                  <?php } ?>-->
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