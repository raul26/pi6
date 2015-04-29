<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Datos_model extends CI_Model
{
  public function __construct()
  {
    parent:: __construct();
  }

  public function ultimos()
  {
    $dia=date('N');
    $woy = date('W');
    for ($i = 0; $i < 3; $i++) {
      $query = "
        select valor from mediciones where tipo_medicion=".$i." and
        dia=".$dia." and woy=".$woy." order by id_medicion desc limit 1";
      $resultado = $this->db->query($query);
      $resultado = $resultado->result_array();
      $valores[$i]=$resultado[0]['valor'];
    }
    return $valores;
  }
  public function ultimosDatos($tipo )
  {
    $woy= date('W');
    for ($i = 1; $i < 8; $i++) {
      $query="SELECT valor FROM mediciones WHERE tipo_medicion=".$tipo." and dia=".$i." and woy=".$woy." order by id_medicion desc limit 1";
      $resultado = $this->db->query($query);
      $resultado = $resultado->result_array();
      if ($resultado[0]['valor']!='') {
        $valores[$i]=$resultado[0]['valor'];
      }else{
        $valores[$i]=0;
      }
    }
    return $valores;
  }
}

?>
