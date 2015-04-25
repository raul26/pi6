<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Encargados_model extends CI_Model
{
  public function __construct()
  {
    parent:: __construct();
  }

  public function guardar_encargado($data)
  {
    $query= $this->db->insert('encargado', $data) ;
  }
  public function all()
  {
    $query = $this->db->get('encargado');
    return $query = $query->result_array();
  }
  public function eliminar($value)
  {
    $this->db->delete('encargado',$value);
  }
  public function getOne($id)
  {
    $this->db->select('*')->from('encargado')->
      where('id_encargado',$id);
    $query = $this->db->get();
    return $query->result_array();
  }
  public function doModificar($id, $values)
  {
    $this->db->where('id_encargado', $id);
    $this->db->update('encargado', $values);
  }
}

?>
