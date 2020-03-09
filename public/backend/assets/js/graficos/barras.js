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
    url: '../../showConeEstadisticas',
    type: "GET",
    dataType: 'json',
    cache: false,
    ifModified:true,
    success:function(ajax){

    var valores = ajax.valores;
       
    myChart.data.labels.length=0;
    myChart.data.datasets[0].data.length=0;

    myChart.data.labels = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
    myChart.data.datasets[0].data = [valores['01'],valores['02'],valores['03'],valores['04'],valores['05'],valores['06'],valores['07'],valores['08'],valores['09'],valores['10'],valores['11'],valores['12']];
    myChart.update();
    },

});



$(document).on("click",".btnReload",function(evento){
  
  $.ajax({
    url: '../../showConeEstadisticas',
    type: "GET",
    dataType: 'json',
    cache: false,
    ifModified:true,
    success:function(ajax){

    var valores = ajax.valores;
       
    myChart.data.labels.length=0;
    myChart.data.datasets[0].data.length=0;

    myChart.data.labels = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
    myChart.data.datasets[0].data = [valores['01'],valores['02'],valores['03'],valores['04'],valores['05'],valores['06'],valores['07'],valores['08'],valores['09'],valores['10'],valores['11'],valores['12']];
    myChart.update();
    },

});

  
  
});
