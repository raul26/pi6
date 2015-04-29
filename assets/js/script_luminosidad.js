$(document).ready(function(){
  $.ajax({
    url: "http://localhost/pi6/index.php/datos/semanal",
    type: "POST",
    data: {
      tipo:2
    }
  }).done(function(obj) {
    var lum = JSON.parse(obj);
    var valores = [];
    for(var x in lum){
      valores.push(parseFloat(lum[x]));
    }
    console.log(lum);

    $('#Luminosidad-Semana').highcharts({
      title: {
        text: 'Luminosidad por dias de la Semana',
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
          text: 'Luminosidad (%)'
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
      },  ]
    });
  });

});
