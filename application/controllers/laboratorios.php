<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Laboratorios extends CI_Controller {
  public function __construct() {
    parent::__construct();
    $this->load->model('laboratorios_model');
  }
	public function index()
	{
    $this->load->view('templates/header');
    $this->load->view('laboratorios/laboratorios_index');
    $this->load->view('templates/footer');
  }
  public function crear()
  {
    $this->load->view('templates/header');
    $this->load->view('laboratorios/laboratorio_nuevo');
    $this->load->view('templates/footer');
  }
  public function guardar()
  {
    $valores = $this->input->post();
    $this->laboratorios_model->guardar_laboratorio($valores);
    redirect('/laboratorios/listado', 'refresh');
  }
  public function listado()
  {
    $all = $this->laboratorios_model->all();
    $valores = array('all' =>$all );
    $this->load->view('templates/header');
    $this->load->view('laboratorios/laboratorios_listado', $valores);
    $this->load->view('templates/footer');
  }

  public function eliminar()
  {
    $valores = array('id_laboratorio' =>$this->uri->segment(3) );
    $this->laboratorios_model->eliminar($valores);
    redirect('/laboratorios/listado', 'refresh');
  }
  public function modificar()
  {
    $id = $this->uri->segment(3);
    $info = $this->laboratorios_model->getOne($id);
    $values = array('info' =>$info );
    $this->load->view('templates/header');
    $this->load->view('laboratorios/laboratorios_modificar', $values);
    $this->load->view('templates/footer');
  }
  public function doModificar()
  {
    $valores = $this->input->post();
    $id=$this->uri->segment(3);
    $this->laboratorios_model->doModificar($id, $valores);
    redirect('/laboratorios/listado', 'refresh');
  }
}
?>
