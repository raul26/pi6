<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Encargados_model extends CI_Model
{
  public function __construct()
  {
    parent:: __construct();
  }

  public function guardar_encargado($data)
  {
    $query = "
      INSERT INTO encargado(id_encargado, nombre, fecha_nacimiento, direccion, telefono, correo, hora_entrada, hora_salida, password, admin)
      VALUES (NULL,'".$data['nombre']."', '".$data['fecha_nacimiento']."','".$data['direccion']."', '".$data['telefono']."', '".$data['correo']."', '".$data['hora_entrada']."', '".$data['hora_salida']."', '".$data['password']."', 0)";
    $this->db->query($query);
  }
  public function all()
  {
    $consulta= "Select * from encargado where admin = 0";
    $query=$this->db->query($consulta);
    return $query->result_array();
  }
  public function eliminar($value)
  {
    $consulta= "Delete from encargado where id_encargado= ".$value['id_encargado']."";
    $query=$this->db->query($consulta);
  }
  public function getOne($id)
  {
    $resultado = "Select * from encargado where id_encargado=".$id."";
    $query=$this->db->query($resultado);
    return $query->result_array();
  }
  public function doModificar($id, $values)
  {
    $query = "UPDATE  encargado SET  nombre =  '".$values['nombre']."',
      edad =  ".$values['edad'].",
      fecha_nacimiento =  '".$values['fecha_nacimiento']."',
      direccion =  '".$values['direccion']."',
      telefono =  '".$values['telefono']."',
      correo =  '".$values['correo']."',
      hora_entrada =  '".$values['hora_entrada']."',
      hora_salida =  '".$values['hora_salida']."',
      password = '".$values['password']."' WHERE  encargado.id_encargado =".$id."";
    $this->db->query($query);
  }
}

?>
