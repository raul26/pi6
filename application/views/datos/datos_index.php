<section class='container'>
<br>
    <div class="row">
      <div class="col s12 m4 center ">
        <div class="col s12 card-panel z-depth-4  amber lighten-2">
          <a href="<?php echo base_url('index.php/datos/temperatura') ; ?>">
          <img class='col s12 'src="<?php echo base_url('assets/images/termome.png') ; ?>" title="Temperatura">
          <br>
          <span class="white-text flow-text">
            Temperatura<p id= 'temperatura'>35 °C</p>
          </span>
          <a href='<?php echo base_url('index.php/datos/temperatura'); ?>'class='white-text'>Ver m&aacutes</a>
          </a>
        </div>
      </div>
      <div class="col s12 m4  center">
        <div class="col s12 card-panel z-depth-4  light-blue lighten-2">
          <a  href='<?php echo base_url('index.php/datos/humedad'); ?>'>
          <img class='col s12 ' src="<?php echo base_url('assets/images/nube.png') ; ?>" title="Humedad">
          <span class="white-text flow-text">
            Humedad<p id= 'humedad'>90 %HR</p>
          </span>
          <a  href='<?php echo base_url('index.php/datos/humedad'); ?>'class='white-text'>Ver m&aacutes</a>
        </a>
        </div>
      </div>
      <div class="col s12 m4 center ">
        <div class="col s12 card-panel z-depth-4  teal lighten-2">
        <a  href='<?php echo base_url('index.php/datos/luminosidad'); ?>'>
         <img class='col s12' src="<?php echo base_url('assets/images/candle.png') ; ?>" title="Luminosidad">
          <br>
          <span class="white-text flow-text">
            Luminosidad<p id= 'luminosidad'>10 %</p>
          </span>
          <a href='<?php echo base_url('index.php/datos/luminosidad'); ?>'class='white-text'>Ver m&aacutes</a>
        </div>
        </a>
      </div>
    </div>
</section>

<script type="text/javascript" charset="utf-8" src="<?php echo base_url('assets/js/script_values.js'); ?>"></script>
