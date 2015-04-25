<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->model('login_model');
    $this->load->helper('form');
    $this->load->helper('url');    
    $this->load->library('session');      
  }

	public function index()
	{
    /*$exist = $this->login_model->isLogged();
    if($exist){
      redirect('/dashboard','refresh');
    }else{
      $this->load->view('loginForm');
    } 
    */
    echo "hola"; 
	}

  public function doLogin(){
    if(!isset($_POST['correo']) OR !isset($_POST['password']))
    {
      $this->load->view('header'); //si no recibimos datos por post, cargamos la vista principal
      $this->load->view('navbar');
      $this->load->view('welcome_message');
      $this->load->view('footer');
      //echo "no mando post";
    }
    else
    {      
      $validLogin = $this->login_model->doLogin($_POST['correo'],$_POST['password']);//preguntamos si hay alguien con es info.      
    if ($validLogin) {//si madno informacion si hay alguien, sino, no existe.
      $sesion_data = array(//informacion de la sesion.
          'id_usuario'=>$validLogin[0]['id_usuario'], 
          'nombre'=>$validLogin[0]['nombre'], 
          'apellidos'=>$validLogin[0]['apellidos'],
          'id_rol'=>$validLogin[0]['id_rol'], 
          'correo' => $_POST['correo'],
        );
        $this->session->set_userdata($sesion_data); //seteamso la informacion de la sesion.       
        redirect('/dashboard','refresh');        
    }else{   
    /*   
      $this->load->view('header');
      $this->load->view('navbar');
      $this->load->view('welcome_message');
      $this->load->view('footer');*/
      redirect('','refresh');
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
