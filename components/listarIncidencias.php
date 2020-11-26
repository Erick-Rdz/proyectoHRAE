<?php
require_once '../includes/conexion.php';
require_once '../includes/funciones.php';

if(!$_GET['Mes'] && !$_GET['Year']){

  $sqlC = "SELECT i.id,c.nombre,e.nombre,i.fecha,i.fechafin,e.id,o.nombre from incidencias i INNER JOIN catalagoIncidencias C ON i.idIncidencia = c.id INNER JOIN enfermera e ON e.id =i.enfermera LEFT JOIN enfermera o ON o.id = i.cubreEnfermera ORDER BY i.id ";
}

if ($_GET['Mes'] && $_GET['Year']) {
  $mes = $_GET['Mes'];
  $year = $_GET['Year'];

   $sqlC = "SELECT i.id,c.nombre,e.nombre,i.fecha,i.fechafin,e.id,o.nombre from incidencias i INNER JOIN catalagoIncidencias C ON i.idIncidencia = c.id INNER JOIN enfermera e ON e.id =i.enfermera LEFT JOIN enfermera o ON o.id = i.cubreEnfermera WHERE MONTH(i.fecha) = $mes AND YEAR(i.fecha)= $year ORDER BY i.id";
  
} 

if ($_GET['Mes'] && !$_GET['Year']){
  $mes = $_GET['Mes'];
  $sqlC = "SELECT i.id,c.nombre,e.nombre,i.fecha,i.fechafin,e.id,o.nombre from incidencias i INNER JOIN catalagoIncidencias C ON i.idIncidencia = c.id INNER JOIN enfermera e ON e.id =i.enfermera LEFT JOIN enfermera o ON o.id = i.cubreEnfermera WHERE MONTH(i.fecha) = $mes ORDER BY i.id";
}
if ($_GET['Year'] && !$_GET['Mes']) {
  $year = $_GET['Year'];
   $sqlC = "SELECT i.id,c.nombre,e.nombre,i.fecha,i.fechafin,e.id,o.nombre from incidencias i INNER JOIN catalagoIncidencias C ON i.idIncidencia = c.id INNER JOIN enfermera e ON e.id =i.enfermera LEFT JOIN enfermera o ON o.id = i.cubreEnfermera WHERE YEAR(i.fecha)= $year ORDER BY i.id";
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
    $data = $row[0]."||".$row[1]."||".$row[2]."||".$row[3]."||".$row[4]."||".$row[5];//."||".$row[6];
    $query2 ="SELECT a.nombre AS'AREA' from area a INNER JOIN mes_area m ON m.id = a.id WHERE '$row[3]' >= m.fecha_entrada and '$row[3]'<= m.fecha_salida OR ('$row[3]' >= m.fecha_entrada AND m.fecha_salida IS NULL) AND m.id_Enfermera =$row[5]  ";
    $resultado2 = mysqli_query($conexion,$query2);
    $result_area = mysqli_fetch_assoc($resultado2);

    //echo "$query2";
    //echo $query2;
    ?>  


                <tr>                  
                  <td><?php echo $row[1]; ?></td>
                  <td><?php echo $row[2]; ?></td>
                  <!--<td>
                    <?php 
                      if ($result_area)
                            echo $result_area['AREA']; 
                      else
                        echo "SIN REGISTROS";                    
                       ?>   
                  </td>-->
                  <td><?php echo $row[3]; ?></td>
                  <td><?php echo $row[4]; ?></td>
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

     if ($_GET['Mes']) {
        unset($_GET['Mes']);
     }

     if ($_GET['Year']) {
        unset($_GET['Year']);
     }
?>