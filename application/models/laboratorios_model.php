<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Laboratorios_model extends CI_Model
{
  public function __construct()
  {
    parent:: __construct();
  }

  //public function guardar_laboratorio($data)
  //{
    //$this->db->insert('laboratorio', $data) ;
  //}
  public function all()
  {
    $sql = "select * from laboratorio";
    $query = $this->db->query($sql);
    return $query = $query->result_array();
  }
  //public function eliminar($value)
  //{
    //$this->db->delete('laboratorio',$value);
  //}
  public function getOne($id)
  {
    $sql = "select * from laboratorio where id_laboratorio=".$id;
    $query = $this->db->query($sql);
    return $query->result_array();
  }
  public function doModificar($id, $values)
  {
    //$this->db->where('id_laboratorio', $id);
    //$this->db->update('laboratorio', $values);
    $query = "UPDATE  laboratorio SET  tipo_uso =  '".$values['tipo_uso']."',
      temperatura_minima =  ".$values['temperatura_minima'].",
      temperatura_maxima =  '".$values['temperatura_maxima']."',
      humedad_minima =  '".$values['humedad_minima']."',
      humedad_maxima =  '".$values['humedad_maxima']."',
      luminosidad_minima =  '".$values['luminosidad_minima']."',
      luminosidad_maxima =  '".$values['luminosidad_maxima']."' WHERE  laboratorio.id_laboratorio =".$id;
    $this->db->query($query);
  }
}

?>
