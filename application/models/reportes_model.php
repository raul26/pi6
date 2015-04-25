<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reportes_model extends CI_Model
{
  public function __construct()
  {
    parent:: __construct();
  }
  public function all()
  {
    $this->db->select('reportes.*, encargado.nombre, laboratorio.tipo_uso, mediciones.valor, mediciones.tipo_medicion ')->
      from('reportes')->
      join('encargado','reportes.id_encargado = encargado.id_encargado','inner')->
      join('laboratorio','reportes.id_laboratorio = laboratorio.id_laboratorio','inner')->
      join('mediciones','reportes.id_medicion = mediciones.id_medicion','inner')->
      where('reportes.status', '0');
    $query = $this->db->get();
    return $query = $query->result_array();

  }
  public function getOne($id)
  {
      $this->db->select('reportes.*, encargado.nombre, laboratorio.tipo_uso, mediciones.* ')->
      from('reportes')->
      join('encargado','reportes.id_encargado = encargado.id_encargado','inner')->
      join('laboratorio','reportes.id_laboratorio = laboratorio.id_laboratorio','inner')->
      join('mediciones','reportes.id_medicion = mediciones.id_medicion','inner')->
      where('reportes.id_reporte',$id)->where('reportes.status', '0');
    $query = $this->db->get();
    return $query = $query->result_array();
  }
  public function doModificar($id)
  {
    $values = array('status' => 1);
    $this->db->where('id_reporte', $id);
    $this->db->update('reportes', $values);
  }
}

?>
