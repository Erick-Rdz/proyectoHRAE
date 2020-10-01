<?php

require_once '../includes/conexion.php';

$sqlC = "SELECT e.id,c.id as 'ID_CODIGO', c.nombre as 'codigo',e.nombre AS 'Nombre',e.turno AS 'TURNO', e.fechaNac as 'Fecha Nacimiento' ,e.sexo as 'Sexo',e.fechaIngreso, a.id, a.nombre as 'area' from area a 
INNER JOIN enfermera e ON e.area = a.id INNER JOIN codigo c on c.id = e.codigo; ";

/*
$sqlC = "SELECT e.id,c.nombre as 'codigo',e.nombre,e.turno,CONCAT(e.horaEntrada,' || ',e.horaSalida)as horario,
a.nombre as 'area',e.fechaIngreso,e.diasLaborales from area a 
INNER JOIN enfermera e ON e.area = a.id INNER JOIN codigo c on c.id = e.codigo; ";
*/
$resultC = mysqli_query($conexion, $sqlC);

while ($row = mysqli_fetch_row($resultC)) { // por cada fila itera

    $data = $row[0]."||".$row[1]."||".$row[2]."||".$row[3]."||".$row[4]."||".$row[5]."||".$row[6]."||".$row[7]."||".$row[8]."||".$row[9];
    ?>

        <tr>
          <td><?php echo $row[2]; ?></td>
          <td><?php echo $row[3]; ?></td>
          <td><?php echo $row[4]; ?></td>
          <td><?php echo $row[5]; ?></td>
          <td><?php echo $row[6]; ?></td>
          <td><?php echo $row[7]; ?></td>

          <td><?php echo $row[9]; ?></td>
          <td>
            <button type="submit"  class="btn btn-warning" id="<?=$enfermera['id']?>" data-toggle="modal" data-target="#editarEnfermeraModal" onclick="cargarDataEnfermera('<?php echo $data ?>')">Editar</button>
            <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#confirmarEliminacion" 
            onclick="eliminarEnfermera('<?php echo $row[0] ?>')">Eliminar</button>                        
          </td>
        </tr>



<?php
      }// termina el ciclo
?>