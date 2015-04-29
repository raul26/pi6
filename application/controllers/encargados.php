<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Encargados extends CI_Controller {
  public function __construct() {
    parent::__construct();
    if (!$this->session->userdata('nombre')) {
      redirect('/','refresh');
    }
    $this->load->model('encargados_model');
  }

	public function index()
	{
    $this->load->view('templates/header');
    $this->load->view('encargados/encargado_index');
    $this->load->view('templates/footer');
  }
  public function crear()
  {
    $this->load->view('templates/header');
    $this->load->view('encargados/encargado_nuevo');
    $this->load->view('templates/footer');
  }
  public function guardar()
  {
    $valores = $this->input->post();
    $this->encargados_model->guardar_encargado($valores);
    redirect('/encargados/listado', 'refresh');
  }
  public function listado()
  {
    $all = $this->encargados_model->all();
    $valores = array('all' =>$all );
    $this->load->view('templates/header');
    $this->load->view('encargados/encargado_listado', $valores);
    $this->load->view('templates/footer');
  }

  public function eliminar()
  {
    $valores = array('id_encargado' =>$this->uri->segment(3) );
    $this->encargados_model->eliminar($valores);
    redirect('/encargados/listado', 'refresh');
  }
  public function modificar()
  {
    $id = $this->uri->segment(3);
    $info = $this->encargados_model->getOne($id);
    $values = array('info' =>$info );
    $this->load->view('templates/header');
    $this->load->view('encargados/encargado_modificar', $values);
    $this->load->view('templates/footer');
  }
  public function doModificar()
  {
    $valores = $this->input->post();
    $id=$this->uri->segment(3);
    $this->encargados_model->doModificar($id, $valores);
    redirect('/encargados/listado', 'refresh');
  }
}
?>
