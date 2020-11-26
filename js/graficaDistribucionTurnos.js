function loadListDistribucionTurnos(){
    
  var fecha = getFecha();

  div = document.getElementById('listadoDistribucionTurnos');
  var xhr = new XMLHttpRequest();

  xhr.onload = function () {
      div.innerHTML = this.response;
  };

  console.log(fecha);

  xhr.open('GET', 'components/listarDistribucionPorTurnos.php?fecha='+fecha, true);
  xhr.send();

}

function getFecha(){
    var mes = document.getElementById('mesFiltro').value;
    var year = document.getElementById('yearFiltro').value;
    var fecha;
    if (year!=null) {
      fecha = year+"-"+mes+"-01";
    }
    return fecha;
}


function ObtenerDatosPorTurno(){

  var fecha = getFecha();

    $.ajax({
      type:"GET",
      url:'controllers/datosGraficaTurnos.php?fecha='+fecha,
      success:function(resultado){
        var js = JSON.parse(resultado);
        graficarPorArea(js);
       }
    });
}

function graficarPorArea(data){
  let x = data.replace('\"', '');
  let dataGrafica = x.split('||');

  var labels = [];
  var cantidades = [];
  var j=0;
  var z=0;

  for (i = 0; i < (dataGrafica.length-1); i++) { 
      if(i%2==0){
          labels[j]=dataGrafica[i];
          j++;
      }else{
          cantidades[z]=dataGrafica[i];
          z++;
      }
  }

  var colores = getRandomColor(5);
  var chartdata = {
                  labels: labels,
                  datasets: [{
                      label: labels,
                      backgroundColor:colores,
                      data: cantidades
                  }]
              }
  var graficar = document.getElementById('myChart').getContext('2d'); // 2d context            
        var grafico = new Chart(graficar, {
            type: 'pie',
            data: chartdata,
            options: {
                responsive: true,

            }
        });
        loadListDistribucionTurnos();
}

function getRandomColor(cantidad) {
  var colores = [];
  for (var i = 0; i <cantidad; i++) {
      colores[i] = "#"+Math.floor(Math.random()*16777215).toString(16);
  }
  return colores; 
}

