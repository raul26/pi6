<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->model('login_model');
  }

  public function index()
  {
  }
  public function doLogin(){
    $values=$this->input->post();
    $validLogin = $this->login_model->doLogin($values);//preguntamos si hay alguien con es info.
    if ($validLogin) {//si madno informacion si hay alguien, sino, no existe.
      $sesion_data = array(//informacion de la sesion.
        'id_encargado'=>$validLogin[0]['id_encargado'],
        'nombre'=>$validLogin[0]['nombre'],
        'correo'=>$validLogin[0]['correo']
      );
      $this->session->set_userdata($sesion_data); //seteamso la informacion de la sesion.
      redirect('/welcome/principal','refresh');
    }else{
      redirect('/','refresh');
    }
  }
  function destroy()
  {
    //destruimos la sesión
    echo $this->login_model->close();
    redirect('','refresh');
  }
}
?>
