<?php

require_once '../includes/conexion.php';

$sqlC = "SELECT m.id,e.nombre AS 'Nombre',m.fecha_entrada, m.fecha_salida, m.turno FROM mes_turno m INNER JOIN enfermera e ON e.id = m.id_enfermera ORDER BY e.id";
$resultC = mysqli_query($conexion, $sqlC);

while ($row = mysqli_fetch_row($resultC)) { // por cada fila itera

    $data = $row[0]."||".$row[1]."||".$row[2]."||".$row[0]."||".$row[1]."||".$row[2];
    ?>


                <tr>
                  <td><?php echo$row[1]; ?> </td>
                  <td><?php echo$row[2]; ?> </td>
                  <td><?php echo$row[3]; ?> </td>
                  <td><?php echo$row[4]; ?> </td>
                  <td>                   
                    
                    <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#confirmarEliminacion"
                     onclick="eliminarRegistroTurno('<?php echo $row[0] ?>')">Eliminar</button>
                  </td>
                </tr>





<?php
      }// termina el ciclo
?>