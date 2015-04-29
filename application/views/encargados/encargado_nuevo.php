<br>
<section class='row container'>
  <form class="col s12" action='<?php echo base_url('index.php/encargados/guardar') ?>' method='post'>
    <div class="row">
      <div class="input-field col s6">
        <input id="icon_prefix" type="text" class="validate" name='nombre'>
        <label for="icon_prefix">Nombre Completo</label>
      </div>

    </div>
    <div class='row'>
      <div class="input-field col s2">
        <input id="last_name" type="text" class="validate"name='edad'>
        <label for="last_name">Edad</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s4">
        <label>Fecha Nacimiento</label>
        <br></br>
        <input type="date" class="datepicker"name='fecha_nacimiento'>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <input id="password" type="password" class="validate"name='direccion'>
        <label for="password">Dirección</label>
      </div>
    </div>
     <div class="input-field col s5">
        <input id="icon_telephone" type="tel" class="validate"name='telefono'>
        <label>Telefóno</label>
      </div>
     <div class="row">
      <div class="input-field col s5">
        <input id="email" type="email" class="validate"name='correo'>
        <label for="email">Email</label>
      </div>
    </div>
     <div class="row">
      <div class="input-field col s12">
         <label >Hora de entrada</label>
         <br></br>
        <input id="timein" type="time" class="validate"name='hora_entrada'>
      </div>
    </div>
     <div class="row">
      <div class="input-field col s12">
         <label >Hora de Salida</label>
         <br></br>
        <input id="timeout" type="time" class="validate"name='hora_salida'>
      </div>
    </div>
   <button class="btn waves-effect waves-light" type="submit" >Guardar
    <i class="mdi-content-send right"></i>
  </button>
  </form>
</section>

