 
function graficaIndex(data){

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
  //var color = ['rgba(255, 99, 132, 0.2)', 'rgba(54, 162, 235, 0.2)', 'rgba(255, 206, 86, 0.2)', 'rgba(75, 192, 192, 0.2)', 'rgba(153, 102, 255, 0.2)', 'rgba(255, 159, 64, 0.2)'];
  // var bordercolor = ['rgba(255,99,132,1)', 'rgba(54, 162, 235, 1)', 'rgba(255, 206, 86, 1)', 'rgba(75, 192, 192, 1)', 'rgba(153, 102, 255, 1)', 'rgba(255, 159, 64, 1)'];

  var chartdata = {
                  labels: labels,
                  datasets: [{
                      label: labels,
                      backgroundColor:colores,
                      //borderColor: color,
                      //borderWidth: 2,
                      //hoverBackgroundColor: color,
                      //hoverBorderColor: bordercolor,
                      data: cantidades
                  }]
              }

  var graficar = document.getElementById('myChart');
        var grafico = new Chart(graficar, {
            type: 'doughnut',
            data: chartdata,
            options: {
                responsive: true,

            }
        });
}

  function getRandomColor(cantidad) {
    var colores = [];

    for (var i = 0; i <cantidad; i++) {
        colores[i] = "#"+Math.floor(Math.random()*16777215).toString(16);
    }
    return colores; 
  }
