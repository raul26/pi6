<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reportes extends CI_Controller {
  public function __construct() {
    parent::__construct();
    $this->load->model('reportes_model');
  }
	public function index()
  {
    $all = $this->reportes_model->all();
    $valores = array('all' =>$all );
    $this->load->view('templates/header');
    $this->load->view('reportes/reportes_listado', $valores);
    $this->load->view('templates/footer');
  }
  public function verMas()
  {
    $id = $this->uri->segment(3);
    $all = $this->reportes_model->getOne($id);
    $valores = array('all' =>$all );
    $this->load->view('templates/header');
    $this->load->view('reportes/verMas', $valores);
    $this->load->view('templates/footer');

  }
  public function guardar()
  {
    $valores = $this->input->post();
    $this->laboratorios_model->guardar_laboratorio($valores);
    redirect('/laboratorios/listado', 'refresh');
  }

  public function cambiarEstado()
  {
    $id=$this->uri->segment(3);
    $this->reportes_model->doModificar($id);
    redirect('/reportes', 'refresh');
  }
}
?>
