<br>
<section class='row container'>
  <form class="col s12" action='<?php echo base_url('index.php/laboratorios/guardar') ?>' method='post'>
    <div class="row">
      <div class="input-field col s12">
        <label>Tipo de uso</label>
        <input type="text" class=""name='tipo_uso'>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <label>Temperatura Minima</label>
        <input type="text" class=""name='temperatura_minima'>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <label>Temperatura Maxima</label>
        <input type="text" class=""name='temperatura_maxima'>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <label>Humedad minima</label>
        <input type="text" class=""name='humedad_minima'>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <label>Humedad Maxima</label>
        <input type="text" class=""name='humedad_maxima'>
      </div>
    </div>

  <button class="btn waves-effect waves-light" type="submit" >Guardar
    <i class="mdi-content-send right"></i>
  </button>
  </form>
</section>

