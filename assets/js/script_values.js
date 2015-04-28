$(document).ready(function(){
  $.ajax({
    url: "http://localhost/pi6/index.php/datos/ultimos",
    type: "POST",
    data: {
      tipo:0
    }
  }).done(function(obj) {
    var val = JSON.parse(obj);
    var valores = [];
    for(var x in val){
      valores.push(parseFloat(val[x]));
    }
    $('#temperatura').html(valores[0]);
    $('#humedad').html(valores[1]);
    $('#luminosidad').html(valores[2]);
  });
});
