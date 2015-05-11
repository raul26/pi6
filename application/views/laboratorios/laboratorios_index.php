<section class="container">
  <div class="col s12 m8">
    <table class="hoverable">
    <tr>
      <th><span class="mdi-action-assignment"></span>Laboratorio</th>
      <td> <?php echo ('<p>'.$all[0]['tipo_uso'].'</p>');  ?> </td>
    </tr>
    <tr>
      <th><span class="mdi-image-wb-sunny"></span> Temperatura Minima</th>
      <td><?php echo ('<p>'.$all[0]['temperatura_minima'].'</p>');  ?></td>
    </tr>
    <tr>
      <th> <span class="mdi-image-wb-sunny"></span> Temperatura Maxima</th>
      <td><?php echo ('<p>'.$all[0]['temperatura_maxima'].'</p>');  ?></td>
    </tr>
    <tr>
      <th><span class="mdi-maps-local-drink"></span>Humedad Minima</th>
      <td><?php echo ('<p>'.$all[0]['humedad_minima'].'</p>');  ?></td>
    </tr>
    <tr>
      <th><span class="mdi-maps-local-drink"></span> Humedad Maxima</th>
      <td><?php echo ('<p>'.$all[0]['humedad_maxima'].'</p>');  ?></td>
    </tr>
    <tr>
      <th> <span class="mdi-device-brightness-low"></span> Luminosidad Minima</th>
      <td><?php echo ('<p>'.$all[0]['luminosidad_minima'].'</p>');  ?></td>
    </tr>
    <tr>
      <th> <span class="mdi-device-brightness-high"></span> Luminosidad Maxima</th>
      <td><?php echo ('<p>'.$all[0]['luminosidad_maxima'].'</p>');  ?></td>
    </tr>
  </table>
  </div>
<?php
  echo ('<a class="waves-effect waves-light btn" href='.base_url('/index.php/laboratorios/modificar/'.$all[0]['id_laboratorio']).'>Modificar</a>');
?>
</section>
