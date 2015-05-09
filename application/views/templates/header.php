<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
		<title>Universidad de Colima</title>
    <link href="<?php echo base_url('assets/table/media/css/jquery.dataTables.min.css'); ?>" rel="stylesheet" />
		<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/materialize.min.css'); ?>"  media="screen,projection"/>
		<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/materialize.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/personal.js'); ?>"></script>
    <script type="text/javascript" charset="utf-8" src="<?php echo base_url('assets/js/highcharts.js'); ?>"></script>
    <script type="text/javascript" charset="utf-8" src="<?php echo base_url('assets/js/highcharts-3d.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/table/media/js/jquery.dataTables.min.js'); ?>"></script>
</head>
<body>
<section>
  <ul id="dropdown1" class="dropdown-content">
    <li><a href="<?php echo base_url('index.php/encargados/listado'); ?>">Listado</a></li>
    <li><a href="<?php echo base_url('index.php/encargados/crear'); ?>">Nuevo</a></li>
  </ul>
    <nav class="blue lighten-2" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="<?php echo base_url('index.php/'); ?>" class="brand-logo">MagiNetworks</a>
      <ul class="right hide-on-med-and-down">
<?php
      if ($this->session->userdata('nombre')) {
?>
        <li><a title="Inicio" href="<?php echo base_url('index.php/welcome/principal'); ?>"><i class="large mdi-action-home"></i></a></li>
        <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Encargados<i class="mdi-navigation-arrow-drop-down right"></i></a></li>
        <li><a title="Reportes" href="<?php echo base_url('index.php/reportes'); ?>"><i class="large mdi-action-subject"></i></a></a></li>
        <li><a title="Graficas" href="<?php echo base_url('index.php/datos'); ?>"><i class="large mdi-action-assessment"></i></a></a></li>
        <li id='close'><a title="Cerrar sesion" href=""><i class="large mdi-action-perm-identity"></i></a></a></li>
<?php
      }else{
?>

        <li><a title="Inicio" href="<?php echo base_url('/'); ?>"><i class="large mdi-action-home"></i></a></li>
        <li><a title="Graficas" href="<?php echo base_url('index.php/datos'); ?>"><i class="large mdi-action-assessment"></i></a></a></li>
<?php
      }
?>

      </ul>
    </div>
  </nav>
  <section id='main_content'>
<br>
<br>
