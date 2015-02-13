<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ListTaman extends CI_Controller {
	
	public function index()
	{
		if (!($this->session->userdata('role') == "admin" || $this->session->userdata('role') == "dinas")) {
			$this->load->view('forbidden');
			return false;
		}
		$data['title'] = "Tambah Data Taman Baru";
		$this->load->database();
		$data['listTaman'] = $this->db->query('SELECT * FROM taman');
		$this->load->view('head', $data);
		$this->load->view('nav', $data);
		$this->load->view('listtaman', $data);
		$this->load->view('footer', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */