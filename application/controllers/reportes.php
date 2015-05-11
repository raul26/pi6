<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Reportes extends CI_Controller {
  public function __construct() {
    parent::__construct();
    if (!$this->session->userdata('nombre')) {
      redirect('/','refresh');
    }
    $this->load->model('reportes_model');
  }
	public function index()
  {
    $all = $this->reportes_model->all();
    $valores = array('all' =>$all );
    $this->load->view('templates/header');
    $this->load->view('reportes/reportes_listado', $valores);
    $this->load->view('templates/footer');
  }
  public function verMas()
  {
    $id = $this->uri->segment(3);
    $all = $this->reportes_model->getOne($id);
    switch ($all[0]['tipo_medicion']) {
      case '0':
        $tipo="Temperatura";
        $min="Valor de temperatura minimo: ".$all[0]['temperatura_minima'];
        $max="Valor de temperatura maximo: ".$all[0]['temperatura_maxima'];
      break;
      case '1':
        $tipo="Humedad";
        $min="Valor de humedad minimo: ".$all[0]['humedad_minima'];
        $max="Valor de humedad maximo: ".$all[0]['humedad_maxima'];
      break;
      case '2':
        $tipo="Luminosidad";
        $min="Valor de luminosidad minimo: ".$all[0]['luminosidad_minima'];
        $max="Valor de luminosidad maximo: ".$all[0]['luminosidad_maxima'];
      break;
    }
    //var_dump($all);
    $this->load->library('pdf');
    $this->pdf = new Pdf();
    $this->pdf->AddPage();
    $this->pdf->AliasNbPages();
    $this->pdf->SetTitle("Reporte de incidencia");
    $this->pdf->SetLeftMargin(15);
    $this->pdf->SetRightMargin(15);
    $this->pdf->SetFillColor(200,200,200);
    $this->pdf->SetFont('Arial', 'B', 12);
    $this->pdf->Cell(0,7,'informacion','TB',0,'L','1');
    $this->pdf->Ln(7);
    $this->pdf->Cell(0,6,'Numero de reporte: '.$all[0]['id_reporte'],'B',0,'L',0);
    $this->pdf->Ln(7);
    $this->pdf->Cell(0,6,'Titulo del reporte: '.$all[0]['titulo'],'B',0,'L',0);
    $this->pdf->Ln(7);
    $this->pdf->Cell(0,6,'Descripcion del reporte: '.$all[0]['descripcion'],'B',0,'L',0);
    $this->pdf->Ln(7);
    $this->pdf->Cell(0,6,'Ubicacion: '.$all[0]['tipo_uso'],'B',0,'L',0);
    $this->pdf->Ln(7);
    $this->pdf->Cell(0,6,'Tipo de medicion anormal: '.$tipo,'B',0,'L',0);
    $this->pdf->Ln(7);
    $this->pdf->Cell(0,6,'Valor de la medicion: '.$all[0]['valor'],'B',0,'L',0);
    $this->pdf->Ln(7);
    $this->pdf->Cell(0,6,'Fecha: '.$all[0]['fecha'],'B',0,'L',0);
    $this->pdf->Ln(7);
    $this->pdf->Cell(0,6,'Hora: '.$all[0]['hora'],'B',0,'L',0);
    $this->pdf->Ln(20);

    $this->pdf->Cell(0,7,'Condiciones normales de operacion.','TB',0,'L','1');
    $this->pdf->Ln(7);
    $this->pdf->Cell(0,6,$min,'B',0,'L',0);
    $this->pdf->Ln(7);
    $this->pdf->Cell(0,6,$max,'B',0,'L',0);
    $this->pdf->Ln(20);

    $this->pdf->Cell(0,7,'Informacion de encargado.','TB',0,'L','1');
    $this->pdf->Ln(7);
    $this->pdf->Cell(0,6,'Nombre: '.$all[0]['nombre'],'B',0,'L',0);
    $this->pdf->Ln(7);
    $this->pdf->Cell(0,6,'Telefono: '.$all[0]['telefono'],'B',0,'L',0);
    $this->pdf->Ln(7);
    $this->pdf->Cell(0,6,'Correo electronico: '.$all[0]['correo'],'B',0,'L',0);
    $this->pdf->Ln(7);
    $this->pdf->Cell(0,6,'Hora de entrada: '.$all[0]['hora_entrada'],'B',0,'L',0);
    $this->pdf->Ln(7);
    $this->pdf->Cell(0,6,'Hora de salida: '.$all[0]['hora_salida'],'B',0,'L',0);
    $this->pdf->Ln(7);
    $this->pdf->Output("Reporte_".$all[0]['id_reporte'].".pdf", 'I');
  }
  public function guardar()
  {
    $valores = $this->input->post();
    $this->laboratorios_model->guardar_laboratorio($valores);
    redirect('/laboratorios/listado', 'refresh');
  }

  public function cambiarEstado()
  {
    $id=$this->uri->segment(3);
    $this->reportes_model->doModificar($id);
    redirect('/reportes', 'refresh');
  }
}
?>
