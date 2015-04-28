$(document).ready(function(){
  $.ajax({
    url: "http://localhost/pi6/index.php/datos/semanal",
    type: "POST",
    data: {
      tipo:0
    }
  }).done(function(obj) {
    var temp = JSON.parse(obj);
    var valores = [];
    for(var x in temp){
      valores.push(parseInt(temp[x]));
    }
    console.log(temp);
    $('#Temperatura-Semana').highcharts({
      title: {
        text: 'Temperatura por dias de la Semana',
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
          text: 'Temperatura (°C)'
        },
        plotLines: [{
          value: 0,
          width: 1,
          color: '#808080'
        }]
      },
      tooltip: {
        valueSuffix: '°C'
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
      },]
    });
  });
});
