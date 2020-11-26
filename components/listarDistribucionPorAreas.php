<?php

require_once '../includes/conexion.php';

$fecha = $_GET['fecha'];

$sqlC = "SELECT a.nombre AS'NOMBRE', count(m.id) AS 'NUMERO' from mes_area m INNER JOIN area a ON a.id = m.id_area where '$fecha' BETWEEN m.fecha_entrada and m.fecha_salida OR '$fecha' >=m.fecha_entrada AND m.fecha_salida is NULL   OR MONTH('$fecha') = MONTH(m.fecha_entrada) AND YEAR('$fecha') = YEAR(m.fecha_entrada) GROUP BY m.id_area";
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





