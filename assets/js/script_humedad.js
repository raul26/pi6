$(document).ready(function(){
  $.ajax({
    url: "http://localhost/pi6/index.php/datos/semanal",
    type: "POST",
    data: {
      tipo:1
    }
  }).done(function(obj) {
    var hum = JSON.parse(obj);
    var valores = [];
    for(var x in hum){
      valores.push(parseFloat(hum[x]));
    }
    $('#Humedad-Semana').highcharts({
      title: {
        text: 'Humedad por dias de la Semana',
        x: -20 //center
      },
      subtitle: {
        text: 'Lecturas mas recientes.',
        x: -20
      },
      xAxis: {
        categories: ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado',
          'Domingo']
      },
      yAxis: {
        title: {
          text: 'Humedad (%)'
        },
        plotLines: [{
          value: 0,
          width: 1,
          color: '#808080'
        }]
      },
      tooltip: {
        valueSuffix: '%'
      },
      legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle',
        borderWidth: 0
      },
      series: [{
        name: 'Reciente',
        data: valores
      }, ]
    });
  });
});
