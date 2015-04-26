<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Datos_model extends CI_Model
{
  public function __construct()
  {
    parent:: __construct();
  }

  public function temperatura_semana()
  {
    $semana = date('W');
    $this->db->select('*')->from('mediciones')->
      where('woy',$semana)->order_by('id_medicion','desc')->group_by('dia');
    $query = $this->db->get();
    return $query->result_array();
  }
  public function all()
  {
    $query = $this->db->get('encargado');
    return $query = $query->result_array();
  }
  public function getOne($id)
  {
    $this->db->select('*')->from('encargado')->
      where('id_encargado',$id);
    $query = $this->db->get();
    return $query->result_array();
  }
}

?>
