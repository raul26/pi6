<br>
<section class='container'>
<?php
switch ($all[0]['tipo_medicion']) {
case 0:
  $tipe='Temperatura';
  break;
case 1:
  $tipe='Humedad';
  break;
case 2:
  $tipe='Luminosidad';
  break;
}
?>
</section>
<section class="container">
  <div class="col s12 m8">
    <table class="hoverable">
    <tr>
      <th><span class="mdi-action-assignment"></span>Nombre reporte</th>
      <td> <?php echo ('<p>'.$all[0]['titulo'].'</p>');  ?> </td>
    </tr>
    <tr>
      <th><span class="mdi-action-description"></span> Descripción</th>
      <td><?php echo ('<p>'.$all[0]['descripcion'].'</p>');  ?></td>
    </tr>
    <tr>
      <th> <span class="mdi-action-assignment-ind"></span> Encargado</th>
      <td><?php echo ('<p>'.$all[0]['nombre'].'</p>');  ?></td>
    </tr>
    <tr>
      <th><span class="mdi-action-info"></span>Tipo</th>
      <td><?php echo ('<p>'.$tipe.'</p>');  ?></td>
    </tr>
    <tr>
      <th><span class="mdi-editor-attach-money"></span> Valor</th>
      <td><?php echo ('<p>'.$all[0]['valor'].'</p>');  ?></td>
    </tr>
    <tr>
      <th> <span class="mdi-action-event"></span> Fecha</th>
      <td><?php echo ('<p>'.$all[0]['fecha'].'</p>');  ?></td>
    </tr>
    <tr>
      <th> <span class="mdi-action-alarm"></span> Hora Medición</th>
      <td><?php echo ('<p>'.$all[0]['hora'].'</p>');  ?></td>
    </tr>
  </table>
  </div>
</section>
