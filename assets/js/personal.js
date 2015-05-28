$(document).ready(function(){
  $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
  });
  $('#close').on('click', sure);
  $(".dropdown-button").dropdown({hover:false});
  $(".button-collapse").sideNav();
  $('.borrar').on('click', borrar);
  $('.estado').on('click', modificar);
  $('#tab').DataTable({
    "language": {
      "emptyTable": "No hay datos disponibles",
      "info": "Mostrando _START_ hasta _END_ de _TOTAL_ registros",
      "infoEmpty": "No hay registros para mostrar",
      "infoFiltered": "(filtrado de  _MAX_ registros totales)",
      "lengthMenu": 'Muestra _MENU_ registros',
      "zeroRecords": "No hay ninguna coincidencia en los registros",
      "search": "Buscar:",
      "paginate": {
        "next": "Siguiente",
        "previous": "Anterior"
      }
    }
  });
});
function sure (el) {
  var r = confirm("Está seguro de cerrar sesión?");
  if (r) {
    el.preventDefault();
    window.location.href = 'http://localhost/pi6/index.php/login/destroy';
  }else{
    return false;
  }
}
function borrar (el) {
  var r = confirm('Está seguro de eliminar el registro?');
  if (r) {
    el.preventDefault();
    var id = $(this).parents('tr').data('id');
    console.log(id);
    window.location.href = 'http://localhost/pi6/index.php/encargados/eliminar/'+id;
  }else{
    return false;
  }
}
function modificar (el) {
  var r = confirm('Está seguro de marcar como resuelto el reporte?');
  if (r) {
    el.preventDefault();
    var id = $(this).parents('tr').data('id');
    console.log(id);
    window.location.href = 'http://localhost/pi6/index.php/reportes/cambiarEstado/'+id;
  }else{
    return false;
  }
}
