<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
    if ($this->session->userdata('nombre')) {
      redirect('welcome/principal','refresh');
    }else{
      $this->load->view('welcome_message');
    }
	}
  public function principal()
  {
    if (!$this->session->userdata('nombre')) {
      redirect('/','refresh');
    }else{
      $this->load->view('templates/header');
      $this->load->view('principal');
      $this->load->view('templates/footer');
    }

  }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
