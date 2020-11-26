<?php

require_once '../includes/conexion.php';

$fecha = $_GET['fecha'];

$sqlC = "SELECT c.nombre as 'NOMBRE',COUNT(i.ID) AS'NUMERO' FROM incidencias i INNER JOIN catalagoincidencias c ON c.id = i.idIncidencia WHERE MONTH(i.fecha) = MONTH('$fecha')  AND YEAR(i.fecha) = YEAR('$fecha') GROUP BY i.idIncidencia";
$resultC = mysqli_query($conexion, $sqlC);

$total=0;


if ($resultC && mysqli_num_rows($resultC)>0){
?> 
              <table >
                  <thead>
                    <tr>
                      <td colspan="2" align="center">DISTRIBUCION DE ENFERMERAS POR AREA</td>
                    </tr>
                    <tr>
                      <th>TIPO INCIDENCIA</th>
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





