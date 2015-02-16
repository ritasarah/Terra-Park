<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AddTaman extends CI_Controller {
	
	public function index()
	{
		if (!($this->session->userdata('role') == "admin" || $this->session->userdata('role') == "dinas")) {
			$this->load->view('forbidden');
			return false;
		}
		$data['title'] = "Tambah Data Taman Baru";
		$data['idT'] = "0";
		$data['nama'] = "";
		$data['lokasi'] = "";
		$this->load->view('head', $data);
		$this->load->view('nav', $data);
		$this->load->view('addtaman', $data);
		$this->load->view('footer', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */