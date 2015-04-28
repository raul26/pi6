<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model
{

  public function __construct()
  {
    parent:: __construct();
  }

  public function doLogin($correo,$password)//funcion para hacer el login
  {
    $data = array('correo' => $correo,//informacion la guardo
          'password'=>$password
     );
    $this->db->select('*');     //consulta
    $this->db->from('encargado');
    $this->db->where('correo', $data['correo']);
    $this->db->where('password', $data['password']);
    $query = $this->db->get();//obtengo el valor del query y lo guardo
    return $query->result_array();//regreso el resultado
  }

  public function isLogged()
  {
    if(isset($this->session->userdata['nombre'])){
      return TRUE;
    }else{
      return FALSE;
    }
  }

  public function close()//cierra cesion
  {
    return $this->session->sess_destroy();
  }
}

?>
