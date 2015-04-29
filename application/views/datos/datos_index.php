<section class='container'>
<br>
    <div class="row">
      <div class="col s12 m4 ">
        <div class="card-panel z-depth-4  amber lighten-2">
          <a href="<?php echo base_url('index.php/datos/temperatura') ; ?>">
          <img src="<?php echo base_url('assets/images/termome.png') ; ?>" title="Temperatura">
          <span class="white-text flow-text">
            Temperatura<p id= 'temperatura'>35</p>
          </span>
          <a href='<?php echo base_url('index.php/datos/temperatura'); ?>'class='white-text'>Ver mas</a>
          </a>
        </div>
      </div>
      <div class="col s12 m4 ">
        <div class="card-panel z-depth-4  light-blue lighten-2">
          <a  href='<?php echo base_url('index.php/datos/humedad'); ?>'>
          <img src="<?php echo base_url('assets/images/nube.png') ; ?>" title="Humedad">
          <span class="white-text flow-text">
            Humedad<p id= 'humedad'>90</p>
          </span>
          <a  href='<?php echo base_url('index.php/datos/humedad'); ?>'class='white-text'>Ver mas</a>
        </a>
        </div>
      </div>
      <div class="col s12 m4 ">
        <div class="card-panel z-depth-4  lime accent-1">
        <a  href='<?php echo base_url('index.php/datos/luminosidad'); ?>'>
         <img src="<?php echo base_url('assets/images/candle.png') ; ?>" title="Luminosidad">
          <span class="blue-text flow-text">
            Luminosidad<p id= 'luminosidad'>10</p>
          </span>
          <a href='<?php echo base_url('index.php/datos/luminosidad'); ?>'class='white-text'>Ver mas</a>
        </div>
        </a>
      </div>
    </div>
</section>

<script type="text/javascript" charset="utf-8" src="<?php echo base_url('assets/js/script_values.js'); ?>"></script>
