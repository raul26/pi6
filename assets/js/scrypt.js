$(document).ready(function(){
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
      name: 'Maxima',
      data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2]
    }, {
      name: 'Promedio',
      data: [-0.2, 0.8, 5.7, 11.3, 17.0, 22.0, 24.8]
    }, {
      name: 'Minima',
      data: [-0.9, 0.6, 3.5, 8.4, 13.5, 17.0, 18.6]
    }, ]
  });
});

$(document).ready(function(){
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
      name: 'Maxima',
      data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2]
    }, {
      name: 'Promedio',
      data: [-0.2, 0.8, 5.7, 11.3, 17.0, 22.0, 24.8]
    }, {
      name: 'Minima',
      data: [-0.9, 0.6, 3.5, 8.4, 13.5, 17.0, 18.6]
    }, ]
  });

});

$(document).ready(function(){
  $('#Temperatura-Semana').highcharts({
    title: {
      text: 'Porcentajes de Temperatura por dias de la Semana',
      x: -20 //center
    },
    subtitle: {
      text: 'Se pueden monitorear las siguientes variables: temperatura, luminosidad y humedad en el laboratorio.',
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
      name: 'Maxima',
      data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2]
    }, {
      name: 'Promedio',
      data: [-0.2, 0.8, 5.7, 11.3, 17.0, 22.0, 24.8]
    }, {
      name: 'Minima',
      data: [-0.9, 0.6, 3.5, 8.4, 13.5, 17.0, 18.6]
    }, ]
  });

});
