<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Laboratorios_model extends CI_Model
{
  public function __construct()
  {
    parent:: __construct();
  }

  public function guardar_laboratorio($data)
  {
    $this->db->insert('laboratorio', $data) ;
  }
  public function all()
  {
    $query = $this->db->get('laboratorio');
    return $query = $query->result_array();
  }
  public function eliminar($value)
  {
    $this->db->delete('laboratorio',$value);
  }
  public function getOne($id)
  {
    $this->db->select('*')->from('laboratorio')->
      where('id_laboratorio',$id);
    $query = $this->db->get();
    return $query->result_array();
  }
  public function doModificar($id, $values)
  {
    $this->db->where('id_laboratorio', $id);
    $this->db->update('laboratorio', $values);
  }
}

?>
