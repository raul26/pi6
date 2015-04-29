<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reportes_model extends CI_Model
{
  public function __construct()
  {
    parent:: __construct();
  }
  public function all()
  {
    $consulta= "select reportes.*, encargado.nombre, laboratorio.tipo_uso, mediciones.valor, mediciones.tipo_medicion
      from reportes
      inner join encargado on reportes.id_encargado = encargado.id_encargado
      inner join laboratorio on reportes.id_laboratorio = laboratorio.id_laboratorio
      inner join mediciones on reportes.id_medicion = mediciones.id_medicion
      where
      reportes.status=0";
    $query=$this->db->query($consulta);
    return $query->result_array();
  }
  public function getOne($id)
  {
    $consulta= "select reportes.*, encargado.nombre, laboratorio.tipo_uso, mediciones.valor, mediciones.*
      from reportes
      inner join encargado on reportes.id_encargado = encargado.id_encargado
      inner join laboratorio on reportes.id_laboratorio = laboratorio.id_laboratorio
      inner join mediciones on reportes.id_medicion = mediciones.id_medicion
      where
      reportes.id_reporte=".$id." and reportes.status=0";
    $query=$this->db->query($consulta);
    return $query->result_array();
  }
  public function doModificar($id)
  {
    $query = " update reportes set status = 1 WHERE  id_reporte = ".$id." ";
    $this->db->query($query);
  }
}
?>
