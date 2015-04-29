    <section class='container'>
      <?php
      if (isset($all[0])){
      ?>
      <table id='tab'>
        <thead>
          <th>Titulo</th>
          <th>Encargado</th>
          <th>Laboratorio</th>
          <th>Tipo Medicion</th>
          <th>Valor Medicion</th>
          <th>Acciones</th>
        </thead>
        <tbody>
            <?php
              foreach($all as $valor){
                switch ($valor['tipo_medicion']) {
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
                echo('<tr>');
                echo ('<td>'.$valor['titulo'].'</td>');
                echo ('<td>'.$valor['nombre'].'</td>');
                echo ('<td>'.$valor['tipo_uso'].'</td>');
                echo ('<td>'.$tipe.'</td>');
                echo ('<td>'.$valor['valor'].'</td>');
                echo ('<td><a href='.base_url('/index.php/reportes/verMas/'.$valor['id_reporte']).'><i title="Ver mas" class="small mdi-image-control-point"></i>  </a><a href='.base_url('/index.php/reportes/cambiarEstado/'.$valor['id_reporte']).'><i title="Marcar Listo" class=" small mdi-toggle-check-box"></i></a></td>');
                echo('</tr>');
              }
      }
          else{
            echo '<h1>No hay reportes para mostrar</h1>';
          }
            ?>
        </tbody>
      </table>
    </section>

