<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ListUser extends CI_Controller {
	
	public function index()
	{
		if (!($this->session->userdata('role') == "admin")) {
			$this->load->view('forbidden');
			return false;
		}
		$data['title'] = "Tambah Data Taman Baru";
		$this->load->database();
		$data['listUser'] = $this->db->query('SELECT * FROM user');
		$this->load->view('head', $data);
		$this->load->view('nav', $data);
		$this->load->view('listuser', $data);
		$this->load->view('footer', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */