<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->model('login_model');
  }

	public function index()
	{
    echo "hola";
	}

  public function doLogin(){
    if(!isset($_POST['correo']) OR !isset($_POST['password']))
    {
      echo "no mando post";
      redirect('/', 'refresh');
    }
    else
    {
      $validLogin = $this->login_model->doLogin($_POST['correo'],$_POST['password']);//preguntamos si hay alguien con es info.
      if ($validLogin) {//si madno informacion si hay alguien, sino, no existe.
        $sesion_data = array(//informacion de la sesion.
          'id_encargado'=>$validLogin[0]['id_encargado'],
          'nombre'=>$validLogin[0]['nombre'],
          'correo'=>$validLogin[0]['correo']
        );
        $this->session->set_userdata($sesion_data); //seteamso la informacion de la sesion.
        redirect('/encargados/','refresh');
      }else{
        redirect('/','refresh');
      }
    }
  }
  function destroy()
  {
    //destruimos la sesión
    $this->login_model->close();
    redirect('','refresh');
  }

}
?>
