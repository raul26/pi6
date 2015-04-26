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
    //$info = $this->datos_model->temperatura_semana();
    //var_dump($info);
    $this->load->view('templates/header');
    $this->load->view('datos/datos_temperatura');
    $this->load->view('templates/footer');
  }
  public function humedad()
  {
    //$info = $this->datos_model->temperatura_semana();
    //var_dump($info);
    $this->load->view('templates/header');
    $this->load->view('datos/datos_humedad');
    $this->load->view('templates/footer');
  }
  public function luminosidad()
  {
    //$info = $this->datos_model->temperatura_semana();
    //var_dump($info);
    $this->load->view('templates/header');
    $this->load->view('datos/datos_luminosidad');
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
