<?php

require_once '../includes/conexion.php';

$fecha = $_GET['fecha'];

$sqlC = "SELECT turno as 'TURNO', COUNT(id) AS 'NUMERO' FROM mes_turno   WHERE '$fecha' BETWEEN fecha_entrada and fecha_salida OR '$fecha' >=fecha_entrada AND fecha_salida is NULL   OR MONTH('$fecha') = MONTH(fecha_entrada) AND YEAR('$fecha') = YEAR(fecha_entrada) GROUP BY TURNO";
$resultC = mysqli_query($conexion, $sqlC);

$total=0;

if ($resultC){
?> 
              <table >
                  <thead>
                    <tr>
                      <td colspan="2" align="center">DISTRIBUCION DE ENFERMERAS POR AREA</td>
                    </tr>
                    <tr>
                      <th>AREA</th>
                      <th>NUMERO DE ENFERMERAS</th>
                    </tr>
                </thead>


<?php 
while ($row = mysqli_fetch_row($resultC)) { // por cada fila itera
        $data = $row[0]."||".$row[1];
        $total = $total + $row[1];
    ?>
          <tr>
            <td><?php echo$row[0]; ?> </td>
            <td><?php echo$row[1]; ?> </td>
          </tr>
        

<?php
  }
?>

          <tr>
            <td colspan="2" align="center"> TOTAL: <?php echo $total ?></td>
          </tr>
          </table>
<?php
    }else{ 
?>
  <center><h2>No se encontraron Registros.</h2></center>

  <?php
}
  ?>





