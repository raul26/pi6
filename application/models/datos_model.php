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
      //var_dump($resultado);
      if ($resultado) {
        $valores[$i]=$resultado[0]['valor'];
      }else{
        $valores[$i]=0;
      }
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
      if ($resultado) {
        $valores[$i]=$resultado[0]['valor'];
      }else{
        $valores[$i]=0;
      }
    }
    return $valores;
  }
  public function ultimosDatos_full($tipo, $woy )
  {
    for ($i = 1; $i < 8; $i++) {
      $query="SELECT MAX(valor) as valor FROM mediciones WHERE tipo_medicion=".$tipo." and dia=".$i." and woy=".$woy."";
      $resultado = $this->db->query($query);
      $resultado = $resultado->result_array();
      if ($resultado) {
        $altas[$i]=$resultado[0]['valor'];
      }else{
        $altas[$i]=0;
      }
      $query="SELECT MIN(valor) as valor FROM mediciones WHERE tipo_medicion=".$tipo." and dia=".$i." and woy=".$woy."";
      $resultado = $this->db->query($query);
      $resultado = $resultado->result_array();
      if ($resultado) {
        $bajas[$i]=$resultado[0]['valor'];
      }else{
        $bajas[$i]=0;
      }
      $query="SELECT AVG(valor) as valor FROM mediciones WHERE tipo_medicion=".$tipo." and dia=".$i." and woy=".$woy."";
      $resultado = $this->db->query($query);
      $resultado = $resultado->result_array();
      if ($resultado) {
        $avg[$i]=$resultado[0]['valor'];
      }else{
        $avg[$i]=0;
      }
    }
    $values = array('mayor' => $altas,
                    'menor' => $bajas,
                    'avg' => $avg );
    return $values;
  }

}

?>
