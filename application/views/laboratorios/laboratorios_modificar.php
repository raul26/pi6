<br>
<section class='row container'>
  <form class="col s12" action='<?php echo base_url('index.php/laboratorios/doModificar/'.$info[0]['id_laboratorio']); ?>' method='post'>
    <div class="row">
      <div class="input-field col s12">
        <label>Tipo de uso</label>
        <input type="text" class="" value='<?php echo $info[0]['tipo_uso'] ?>'name='tipo_uso'>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <label>Temperatura Minima</label>
        <input type="text" class=""value='<?php echo $info[0]['temperatura_minima'] ?>'name='temperatura_minima'>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <label>Temperatura Maxima</label>
        <input type="text" class=""value='<?php echo $info[0]['temperatura_maxima'] ?>'name='temperatura_maxima'>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <label>Humedad minima</label>
        <input type="text" class=""value='<?php echo $info[0]['humedad_minima'] ?>'name='humedad_minima'>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <label>Humedad Maxima</label>
        <input type="text" class=""value='<?php echo $info[0]['humedad_maxima'] ?>'name='humedad_maxima'>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <label>Luminosidad minima</label>
        <input type="text" class=""value='<?php echo $info[0]['luminosidad_minima'] ?>'name='luminosidad_minima'>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <label>Luminosidad Maxima</label>
        <input type="text" class=""value='<?php echo $info[0]['luminosidad_maxima'] ?>'name='luminosidad_maxima'>
      </div>
    </div>
  <button class="btn waves-effect waves-light" type="submit" >Guardar
    <i class="mdi-content-send right"></i>
  </button>
  </form>
</section>

