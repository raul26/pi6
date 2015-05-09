<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Datos extends CI_Controller {
  public function __construct() {
    parent::__construct();
    $this->load->model('datos_model');
  }

  public function index()
  {
    $this->load->view('templates/header');
    $this->load->view('datos/datos_index');
    $this->load->view('templates/footer');
  }
  public function temperatura()
  {
    $this->load->view('templates/header');
    $this->load->view('datos/datos_temperatura');
    $this->load->view('templates/footer');
  }
  public function humedad()
  {
    $this->load->view('templates/header');
    $this->load->view('datos/datos_humedad');
    $this->load->view('templates/footer');
  }
  public function luminosidad()
  {
    $this->load->view('templates/header');
    $this->load->view('datos/datos_luminosidad');
    $this->load->view('templates/footer');
  }

  public function semanal()
  {
    $datos = $this->input->post();
    $values = $this->datos_model->ultimosDatos($datos['tipo']);
    echo json_encode($values);
  }
  public function semanal_full()
  {
    $datos = $this->input->post();
    $values = $this->datos_model->ultimosDatos_full($datos['tipo'],$datos['woy']);
    echo json_encode($values);
  }
  public function ultimos()
  {
    $datos = $this->datos_model->ultimos();
    echo json_encode($datos);
  }
}
?>
