$(document).ready(function(){
  $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
  });
  $('#tab').DataTable({
    "language": {
      "emptyTable": "No hya datos disponibles",
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
