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
                echo('<tr  data-id='.$valor['id_encargado'].'>');
                echo ('<td>'.$valor['nombre'].'</td>');
                echo ('<td>'.$valor['correo'].'</td>');
                echo ('<td ><a href='.base_url('/index.php/encargados/modificar/'.$valor['id_encargado']).'><i title="Crear encargado"class="small mdi-content-create"></i>  </a><a class="borrar" href=""><i title="Eliminar"class="small mdi-action-delete"></i></a></td>');
                echo('</tr>');
              }
            ?>
        </tbody>
      </table>
    </section>

