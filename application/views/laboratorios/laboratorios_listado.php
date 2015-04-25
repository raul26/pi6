<section class='container'>
      <table>
        <thead>
          <th>Tipo de uso</th>
          <th>Temp. Max.</th>
          <th>Temp. Min.</th>
          <th>Hum. Max.</th>
          <th>Hum. Min.</th>
          <th colspan='2'>Acciones</th>
          <th></th>
        </thead>
        <tbody>
            <?php
              foreach($all as $valor){
                echo('<tr>');
                echo ('<td>'.$valor['tipo_uso'].'</td>');
                echo ('<td>'.$valor['temperatura_maxima'].'</td>');
                echo ('<td>'.$valor['temperatura_minima'].'</td>');
                echo ('<td>'.$valor['humedad_maxima'].'</td>');
                echo ('<td>'.$valor['humedad_minima'].'</td>');
                echo ('<td><a href='.base_url('/index.php/laboratorios/modificar/'.$valor['id_laboratorio']).'>Modificar</a></td>');
                echo ('<td><a href='.base_url('/index.php/laboratorios/eliminar/'.$valor['id_laboratorio']).'>Eliminar</a></td>');
                echo('</tr>');
              }
            ?>
        </tbody>
      </table>
    </section>

