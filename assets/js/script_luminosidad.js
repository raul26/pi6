$(document).ready(function(){
  $('#ok').on('click', mostrar);
  $('#number').on('keypress', validar);
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
    grafica(valores);
  });
});
function validar (evt){
  var code=(evt.which)?evt.which: event.keycode;
  if(code>31 && (code<48 || code>57)){
    return false;
  }else{
    return true;
  }
}
function mostrar () {
  var woy = $('#number').val();
  $.ajax({
    url: "http://localhost/pi6/index.php/datos/semanal_full",
    type: "POST",
    data: {
      tipo:2,
      woy:woy
    }
  }).done(function(obj) {
    var temp = JSON.parse(obj);
    var menor = [];
    var mayor = [];
    var avg = [];
    for(var x in temp['mayor']){
      mayor.push((parseFloat(temp['mayor'][x])));
    }
    for(var x in temp['menor']){
      menor.push((parseFloat(temp['menor'][x])));
    }
    for(var x in temp['avg']){
      avg.push((parseFloat(temp['avg'][x])));
    }
    grafica_full(woy, mayor, menor, avg);
  });
}
function grafica_full (woy, mayor, menor, avg) {
  $('#Luminosidad-Semana2').highcharts({
    title: {
      text: 'Luminosidad por dias de la Semana '+woy,
      x: -20 //center
    },
    subtitle: {
      text: 'Lectura menor, mayor y promedio por dia',
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
      name: 'Mayor',
      data: mayor
    },{
      name:'Promedio',
      data:avg
    },{
      name:'Menor',
      data:menor
    }]
  });
}
function grafica (valores) {
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
}
