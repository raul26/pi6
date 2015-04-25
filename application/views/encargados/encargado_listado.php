    <section class='container'>
      <table>
        <thead>
          <th>Nombre</th>
          <th>Correo</th>
          <th colspan='2'>Acciones</th>
          <th></th>
        </thead>
        <tbody>
            <?php
              foreach($all as $valor){
                echo('<tr>');
                echo ('<td>'.$valor['nombre'].'</td>');
                echo ('<td>'.$valor['correo'].'</td>');
                echo ('<td><a href='.base_url('/index.php/encargados/modificar/'.$valor['id_encargado']).'>Modificar</a></td>');
                echo ('<td><a href='.base_url('/index.php/encargados/eliminar/'.$valor['id_encargado']).'>Eliminar</a></td>');
                echo('</tr>');
              }
            ?>
        </tbody>
      </table>
    </section>

