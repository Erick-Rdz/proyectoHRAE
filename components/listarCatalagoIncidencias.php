<?php

require_once '../includes/conexion.php';

$sqlC = "SELECT * FROM catalagoincidencias";
$resultC = mysqli_query($conexion, $sqlC);

while ($row = mysqli_fetch_row($resultC)) { // por cada fila itera

    $data = $row[0]."||".$row[1];

    ?>
                <tr>
                  <td><?php echo$row[1]; ?> </td>

                  <td>
                    <buttom type="buttom" class="btn btn-warning" data-toggle="modal" data-target="#editarIncidenciaCatalogo"
                    onclick="cargarDataCatalogo('<?php echo $data ?>')">Editar</buttom>
                    <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#confirmarEliminacion"
                    onclick="eliminarCatalagoIncidencias('<?php echo $row[0] ?>')">Eliminar</button>
                    
                  </td>
                </tr>





<?php
      }// termina el ciclo
?>