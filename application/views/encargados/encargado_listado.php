    <section class='container'>
      <table id='tab'>
        <thead>
          <th>Nombre</th>
          <th>Correo</th>
          <th>Acciones</th>
        </thead>
        <tbody>
            <?php
              foreach($all as $valor){
                echo('<tr>');
                echo ('<td>'.$valor['nombre'].'</td>');
                echo ('<td>'.$valor['correo'].'</td>');
                echo ('<td><a href='.base_url('/index.php/encargados/modificar/'.$valor['id_encargado']).'><i title="Crear encargado"class="small mdi-content-create"></i>  </a><a href='.base_url('/index.php/encargados/eliminar/'.$valor['id_encargado']).'><i title="Eliminar"class="small mdi-action-delete"></i></a></td>');
                echo('</tr>');
              }
            ?>
        </tbody>
      </table>
    </section>

