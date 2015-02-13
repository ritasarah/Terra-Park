<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logout extends CI_Controller {
	
	public function index()
	{
		$data['message'] = "Anda telah berhasil log out.";
		$data['title'] = "Logout";
		$this->session->sess_destroy();
		$this->load->view('head', $data);
		$this->load->view('nav', $data);
		$this->load->view('loginResult', $data);
		$this->load->view('footer', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */