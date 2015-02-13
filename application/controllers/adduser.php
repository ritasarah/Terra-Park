<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AddUser extends CI_Controller {
	
	public function index()
	{
		if (!($this->session->userdata('role') == "admin")) {
			$this->load->view('forbidden');
			return false;
		}
		$data['title'] = "Tambah User Baru";
		$this->load->database();
		$data['listAff'] = $this->db->query('SELECT * FROM skpd');
		$this->load->view('head', $data);
		$this->load->view('nav', $data);
		$this->load->view('adduser', $data);
		$this->load->view('footer', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */