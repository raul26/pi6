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

  echo ('<h5>Nombre del reporte: '.$all[0]['titulo'].'</h5>');
  echo ('<h5>Descripcion: '.$all[0]['descripcion'].'</h5>');
  echo ('<h5>Laboratorio: '.$all[0]['tipo_uso'].'</h5>');
  echo ('<h5>Encargado del laboratorio: '.$all[0]['nombre'].'</h5>');
  echo ('<h5>Tipo de medicion: '.$tipe.'</h5>');
  echo ('<h5>Valor de medicion: '.$all[0]['valor'].'</h5>');
  echo ('<h5>Fecha de medicion: '.$all[0]['fecha'].'</h5>');
  echo ('<h5>Hora de medicion: '.$all[0]['hora'].'</h5>');
?>
</section>
