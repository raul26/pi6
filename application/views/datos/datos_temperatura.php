<section class='container'>
  <div id = 'Temperatura-Semana'></div>
<section>
<br>

<h5>N&uacutemero de semana actual es: <span id='woy'><?php echo date('W') ?></span></h5>
<div id='more'>
<form>
  <div class="row">
    <div class="input-field col s3">
      <input id="number" type="text" class="validate"  >
      <label for="number" id='text' >N&uacutemero de Semana</label>
    </div>
  </div>
  <a id='ok' class="waves-effect waves-light btn-large"><i class="mdi-action-find-in-page left"></i>Buscar</a>
</form>
</div>
<div id = 'Temperatura-Semana2'></div>
<script type="text/javascript" charset="utf-8" src="<?php echo base_url('assets/js/script_temperatura.js'); ?>"></script>
