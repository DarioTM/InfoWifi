    //-------------
    //- DONUT CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.

    
var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
var donutChart = new Chart(donutChartCanvas, {
  type: 'doughnut',
  data: {
      labels: [ ],
      datasets: [
        {
          data: [],
          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de','#c94a53','#e279a3','#9163b6'],
        }
      ]
  },
  options: {
      maintainAspectRatio : false,
      responsive : true,
  }
});  


$.ajax({
    url: '../../showEstadisticas',
    type: "GET",
    dataType: 'json',
    success:function(ajax){

    
    var valores = ajax.valores;
    
    var puntos = ajax.puntos;
    
  
    donutChart.data.labels.length=0;
    donutChart.data.datasets[0].data.length=0;

    donutChart.data.labels = [puntos[0].ubicacion.split(',',3)[2], puntos[1].ubicacion.split(',',3)[2], puntos[2].ubicacion.split(',',3)[2], puntos[3].ubicacion.split(',',3)[2], puntos[4].ubicacion.split(',',3)[2], puntos[5].ubicacion.split(',',3)[2], puntos[6].ubicacion.split(',',3)[2], puntos[7].ubicacion.split(',',3)[2], puntos[8].ubicacion.split(',',3)[2]];
    donutChart.data.datasets[0].data = [valores['1'],valores['2'],valores['3'],valores['4'],valores['5'],valores['6'],valores['7'],valores['8'],valores['9']];
    donutChart.update();
    
    }
});


$(document).on("click",".btnReloadCircle",function(evento){
  
$.ajax({
    url: '../../showEstadisticas',
    type: "GET",
    dataType: 'json',
    success:function(ajax){

    
    var valores = ajax.valores;
    
    var puntos = ajax.puntos;
    
  
    donutChart.data.labels.length=0;
    donutChart.data.datasets[0].data.length=0;

    donutChart.data.labels = [puntos[0].ubicacion.split(',',3)[2], puntos[1].ubicacion.split(',',3)[2], puntos[2].ubicacion.split(',',3)[2], puntos[3].ubicacion.split(',',3)[2], puntos[4].ubicacion.split(',',3)[2], puntos[5].ubicacion.split(',',3)[2], puntos[6].ubicacion.split(',',3)[2], puntos[7].ubicacion.split(',',3)[2], puntos[8].ubicacion.split(',',3)[2]];
    donutChart.data.datasets[0].data = [valores['1'],valores['2'],valores['3'],valores['4'],valores['5'],valores['6'],valores['7'],valores['8'],valores['9']];
    donutChart.update();
    
    }
});


});






// logic to get new data

// var getData = function() {

// $.ajax({
//     url: '../../showEstadisticas',
//     type: "GET",
//     dataType: 'json',
//     success:function(ajax){

    
//     var valores = ajax.valores;
    
//     var puntos = ajax.puntos;
    
  
//     donutChart.data.labels.length=0;
//     donutChart.data.datasets[0].data.length=0;

//     donutChart.data.labels = [puntos[0].ubicacion,puntos[1].ubicacion,puntos[2].ubicacion,puntos[3].ubicacion,puntos[4].ubicacion,puntos[5].ubicacion,puntos[6].ubicacion,puntos[7].ubicacion,puntos[8].ubicacion];
//     donutChart.data.datasets[0].data = [valores['1'],valores['2'],valores['3'],valores['4'],valores['5'],valores['6'],valores['7'],valores['8'],valores['9']];
//     donutChart.update();
    
    
    
    
//     }
// });

// };

// setInterval(getData, 3000);  
    
    