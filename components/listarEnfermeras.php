<?php

require_once '../includes/conexion.php';

$sqlC = "SELECT e.id, c.id, c.nombre as 'CODIGO', e.nombre as 'NOMBRE', e.fechaNac as 'FECHA DE NACIMIENTO', e.sexo as' SEXO', e.fechaIngreso as ' FECHA DE INGRESO' from enfermera e INNER JOIN codigo c ON c.id = e.codigo";

if (isset($_GET['buscarEnfermera'])) {
  $cadena = $_GET['buscarEnfermera'];
  $sqlC .=" WHERE e.nombre LIKE '%$cadena%' ";
}

$resultC = mysqli_query($conexion, $sqlC);

if ($resultC) //SÍ EXISTEN REGISTROS
  while ($row = mysqli_fetch_row($resultC)) { // por cada fila itera    
    
    $sql_Area = "SELECT m.id as'ID_MES_AREA',a.id AS 'ID_AREA',a.nombre as 'NOMBRE' from mes_area m INNER JOIN area a ON m.id_area = a.id WHERE m.id_Enfermera = $row[0] AND fecha_salida IS NULL "; //OBTENER AL ID Y NOMBRE DEL AREA ACTUAL

    $res2 = mysqli_query($conexion,$sql_Area);
    $area = mysqli_fetch_assoc($res2);

    $sql_TURNO = "SELECT id as 'ID_MES_TURNO', turno as 'TURNO' from mes_turno WHERE id_Enfermera = $row[0] AND fecha_salida is NULL"; //OBTENER EL ID Y NOMBRE DEL TURNO ACUAL

    $res3 = mysqli_query($conexion,$sql_TURNO);
    $turno = mysqli_fetch_assoc($res3);

    $data = $row[0]."||".$row[1]."||".$row[2]."||".$row[3]."||".$row[4]."||".$row[5]."||".$row[6].'||'.$turno['TURNO'].'||'.$area['ID_AREA'];

    ?>

        <tr>
          <td><?php echo $row[2]; ?></td>
          <td><?php echo $row[3]; ?></td>
          <td><?php echo $row[4]; ?></td>
          <td><?php echo $row[5]; ?></td>
          <td><?php echo $row[6]; ?></td>
          <td><?php echo $turno['TURNO']; ?></td>
          <td><?php echo $area['NOMBRE']; ?></td>
          <td>
            <button type="submit"  class="btn btn-warning" id="<?=$enfermera['id']?>" data-toggle="modal" data-target="#editarEnfermeraModal" onclick="cargarDataEnfermera('<?php echo $data ?>')">Editar</button>
            <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#confirmarEliminacion" 
            onclick="eliminarEnfermera('<?php echo $row[0] ?>')">Eliminar</button>                        
          </td>
        </tr>




<?php

      }// termina el ciclo
?>