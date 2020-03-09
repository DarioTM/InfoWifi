
var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
var donutChart = new Chart(donutChartCanvas, {
  type: 'doughnut',
  data: {
      labels: ['Xiaomi', 'Samsung', 'Huawei', 'Asus' ],
      datasets: [
        {
          data: [],
          backgroundColor : ['#461c8a', '#00c3a4', '#6c6eaf', '#60dcc8'],
        }
      ]
  },
  options: {
      maintainAspectRatio : false,
      responsive : true,
  }
});  




$.ajax({
    url: 'http://informatica.ieszaidinvergeles.org:9038/infowifi/showModelos',
    type: "GET",
    dataType: 'json',
    success:function(ajax){

    
    var valores = ajax.valores;

    donutChart.data.datasets[0].data.length=0;


    donutChart.data.datasets[0].data = [valores['Xiaomi'],valores['Samsung'],valores['Huawei'],valores['Asus']];
    donutChart.update();
    
    }
});

