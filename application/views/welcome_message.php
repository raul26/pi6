<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <title>Universidad de Colima</title>
   <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/materialize.min.css'); ?>"  />
   <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>"  />
   <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/personal.css'); ?>"  />
    <link href="<?php echo base_url('assets/table/media/css/jquery.dataTables.min.css'); ?>" rel="stylesheet" />
   <!--<link type="text/css" rel="stylesheet" href="<?php //echo base_url('assets/css/reset.css'); ?>"  />-->
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/materialize.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/materialize.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/personal.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/init.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/table/media/js/jquery.dataTables.min.js'); ?>"></script>
    <script type="text/javascript">
        $(document).ready(function(){
        // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
        $('.modal-trigger').leanModal();
      });
    </script>
</head>
<body>
    <div class="navbar-fixed">
        <nav class="deep-orange darken-4" role="navigation">
          <div class="nav-wrapper container">
              <a id="logo-container" href="index.php" class="brand-logo">MagiNetworks</a>
                <ul class="right hide-on-med-and-down">
                  <!--<li><a href="sass.html"><i class="large mdi-social-person"></i></a></li>-->
                  <li>
                    <a class="modal-trigger" href="#modal1">
                      <i class="large mdi-social-person"></i>
                    </a>
                  </li>

                  <li><a title="Graficas" href="<?php echo base_url('index.php/datos'); ?>"><i class="large mdi-action-assessment"></i></a></a></li>
                </ul>
              <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
          </div>
        </nav>
    </div>

    <!-- Modal Structure -->
    <div id="modal1" class="modal">
      <div class="modal-content">

        <form id="iniciar" class="form-horizontal" action="<?php echo base_url('index.php/login/doLogin') ?>" method="post">
                   <fieldset>

                    <input name="id_user" type="hidden">


                    <div class="control-group">
                      <label class="control-label"> Correo:</label>
                      <div class="controls">
                        <input id="userid" name="correo" type="text" class="form-control" placeholder="" class="input-medium" required>
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label"> Contraseña</label>
                      <div class="controls">
                        <input id="passwordinput" name="password" class="form-control" type="password" placeholder="" class="input-medium" required>
                      </div>
                    </div>
                    <div class="control-group text-center">
                      <label class="control-label"></label>
                      <div class="controls">
                        <button id="signin"  class="right btn btn-success"> Iniciar sesión</button>
                      </div>
                    </div>
                  </fieldset>
                </form>
      </div>
      <div class="modal-footer">
        <a href="#!" class=" modal-action modal-close btn-flat">Salir</a>
      </div>
    </div>

    <div id="index-banner" class="parallax-container">
      <div class="section no-pad-bot">
        <div class="container">
          <br><br>
          <h1 class="header center black-text text-lighten-1">Sistema de Sensores</h1>
          <div class="row center">
            <h5 class="header col s12 light">
              Sistemas de evaluación de variables de importancia por medio de redes de
              sensores e internet de las cosas
            </h5>
          </div>
          <div class="row center">
            <a href="#modal1" class="btn-large waves-light waves-effect modal-trigger">Ingresar</a>
          </div>
          <br><br>

        </div>
      </div>
      <div class="parallax"></div<div class="parallax"><img src="<?php echo base_url('assets/images/background3.jpg') ; ?>" alt="Unsplashed background img 2" id="logoudc"></div>  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">

        <div class="col s12 m6">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="mdi-action-trending-up"></i></h2>
            <h5 class="center">Vista de gráficas de laboratorios</h5>

            <p class="light">
              Los usuarios pueden apreciar los valores medidos por medio de graficas para una evaluación por día,
              semana o mes</p>
          </div>
        </div>


        <div class="col s12 m6">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="mdi-action-settings"></i></h2>
            <h5 class="center">Consultar Reportes</h5>
            <p class="light">
              Los reportes áyudan a conocer la informacion relacionada con la variación de alguna de las variables físicas existentes que se está mnitoreando en tiempo real
            </p>
          </div>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="<?php echo base_url('assets/images/background3.jpg') ; ?>" alt="Unsplashed background img 2" id="logoudc"></div>

  </div>

  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>Contact Us</h4>
          <p class="left-align light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. Cras ut ultricies eros. Maecenas eros justo, ullamcorper a sapien id, viverra ultrices eros. Morbi sem neque, posuere et pretium eget, bibendum sollicitudin lacus. Aliquam eleifend sollicitudin diam, eu mattis nisl maximus sed. Nulla imperdiet semper molestie. Morbi massa odio, condimentum sed ipsum ac, gravida ultrices erat. Nullam eget dignissim mauris, non tristique erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="<?php echo base_url('assets/images/background2.jpg') ; ?>" alt="Unsplashed background img 3" id="logoudc"></div>
  </div>

  <footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Company Bio</h5>
          <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Maginetworks Inc.</a>
      </div>
    </div>
  </footer>
  </body>
</html>
