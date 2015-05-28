$(document).ready(function(){
  $('#ok').on('click', mostrar);
  $('#number').on('keypress', validar);
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
      valores.push(parseFloat(temp[x]));
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
  $('#Temperatura-Semana2').html='';
  var woy = $('#number').val();
  $.ajax({
    url: "http://localhost/pi6/index.php/datos/semanal_full",
    type: "POST",
    data: {
      tipo:0,
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
  $('#Temperatura-Semana2').highcharts({
    title: {
      text: 'Temperatura por días de la Semana '+woy,
      x: -20 //center
    },
    subtitle: {
      text: 'Lectura menor, mayor y promedio por día',
      x: -20
    },
    xAxis: {
      categories: ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado',
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
  $('#Temperatura-Semana').highcharts({
    title: {
      text: 'Temperatura por días de la Semana '+$('#woy').html(),
      x: -20 //center
    },
    subtitle: {
      text: 'Lecturas más recientes.',
      x: -20
    },
    xAxis: {
      categories: ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado',
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
}
