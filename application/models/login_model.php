<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model
{

  public function __construct()
  {
    parent:: __construct();
  }

  public function doLogin($data)//funcion para hacer el login
  {
    $consulta = "Select * from encargado where correo = '".$data['correo']."'and password = '".$data['password']."'";
    $query = $this->db->query($consulta);//obtengo el valor del query y lo guardo
    return $query->result_array();//regreso el resultado
  }

  public function close()//cierra cesion
  {
    return $this->session->sess_destroy();
  }
}

?>
