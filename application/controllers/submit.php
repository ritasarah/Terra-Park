<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class submit extends CI_Controller {
	
	public function index()
	{
		$data['title'] = "Pengajuan Aduan";
		$this->load->database();
		$data['listTaman'] = $this->db->query('SELECT * FROM taman');
		$this->load->view('head', $data);
		$this->load->view('nav', $data);
		$this->load->view('submit', $data);
		$this->load->view('footer', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */