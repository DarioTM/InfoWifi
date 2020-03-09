var ctx_live = document.getElementById('revenue-chart-canvas').getContext('2d');
var myChart = new Chart(ctx_live, {
  type: 'bar',
  data: {
    labels: [],
    datasets: [{
      data: [],
      backgroundColor:'#454890',
    }]
  },
  options: {
    maintainAspectRatio : false,
    responsive: true,

    legend: {
      display: false,
    },
    scales: {
      yAxes: [{
            gridLines : {
              display : false,
            }
      }]
    }
  }
});
  




$.ajax({
    url: 'http://informatica.ieszaidinvergeles.org:9038/infowifi/showEstadisticas',
    type: "GET",
    dataType: 'json',
    cache: false,
    ifModified:true,
    success:function(ajax){

    var valores = ajax.valores;
    
    var puntos = ajax.puntos;
       
    myChart.data.labels.length=0;
    myChart.data.datasets[0].data.length=0;

    myChart.data.labels = [puntos[0].ubicacion.split(',',3)[2], puntos[1].ubicacion.split(',',3)[2], puntos[2].ubicacion.split(',',3)[2], puntos[3].ubicacion.split(',',3)[2], puntos[4].ubicacion.split(',',3)[2], puntos[5].ubicacion.split(',',3)[2], puntos[6].ubicacion.split(',',3)[2], puntos[7].ubicacion.split(',',3)[2], puntos[8].ubicacion.split(',',3)[2]];
    myChart.data.datasets[0].data = [valores['1'],valores['2'],valores['3'],valores['4'],valores['5'],valores['6'],valores['7'],valores['8'],valores['9']];
    myChart.update();
    },

});


