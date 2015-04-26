
$(document).ready(function(){
    $('#Humedad-Mes').highcharts({
        title: {
            text: 'Porcentajes de Humedad en los meses del año',
            x: -20 //center
        },
        subtitle: {
            text: 'Se pueden monitorear las siguientes variables: temperatura, luminosidad y humedad en el laboratorio.',
            x: -20
        },
        xAxis: {
            categories: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
                'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre']
        },
        yAxis: {
            title: {
                text: 'Humedad (°C)'
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
            data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]
        }, {
            name: 'Promedio',
            data: [-0.2, 0.8, 5.7, 11.3, 17.0, 22.0, 24.8, 24.1, 20.1, 14.1, 8.6, 2.5]
        }, {
            name: 'Minima',
            data: [-0.9, 0.6, 3.5, 8.4, 13.5, 17.0, 18.6, 17.9, 14.3, 9.0, 3.9, 1.0]
        }, ]
    });

});



$(document).ready(function(){
    $('#Humedad-Semana').highcharts({
        title: {
            text: 'Porcentajes de Humedad por dias de la Semana',
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
                text: 'Humedad (°C)'
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


$(document).ready(function(){
    $('#Luminosidad-Mes').highcharts({
        title: {
            text: 'Porcentajes de Luminosidad en los meses del año',
            x: -20 //center
        },
        subtitle: {
            text: 'Se pueden monitorear las siguientes variables: temperatura, luminosidad y humedad en el laboratorio.',
            x: -20
        },
        xAxis: {
            categories: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
                'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre']
        },
        yAxis: {
            title: {
                text: 'Luminosidad (°C)'
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
            data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]
        }, {
            name: 'Promedio',
            data: [-0.2, 0.8, 5.7, 11.3, 17.0, 22.0, 24.8, 24.1, 20.1, 14.1, 8.6, 2.5]
        }, {
            name: 'Minima',
            data: [-0.9, 0.6, 3.5, 8.4, 13.5, 17.0, 18.6, 17.9, 14.3, 9.0, 3.9, 1.0]
        }, ]
    });

});

$(document).ready(function(){
    $('#Luminosidad-Semana').highcharts({
        title: {
            text: 'Porcentajes de Luminosidad por dias de la Semana',
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
                text: 'Luminosidad (°C)'
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

$(document).ready(function(){
    $('#Temperatura-Mes').highcharts({
        title: {
            text: 'Porcentajes de Temperatura en los meses del año',
            x: -20 //center
        },
        subtitle: {
            text: 'Se pueden monitorear las siguientes variables: temperatura, luminosidad y humedad en el laboratorio.',
            x: -20
        },
        xAxis: {
            categories: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
                'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre']
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
            data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]
        }, {
            name: 'Promedio',
            data: [-0.2, 0.8, 5.7, 11.3, 17.0, 22.0, 24.8, 24.1, 20.1, 14.1, 8.6, 2.5]
        }, {
            name: 'Minima',
            data: [-0.9, 0.6, 3.5, 8.4, 13.5, 17.0, 18.6, 17.9, 14.3, 9.0, 3.9, 1.0]
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