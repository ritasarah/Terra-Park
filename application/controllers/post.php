<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Post extends CI_Controller {
	
	public function index()
	{
		$data['title'] = "Terra Park - View Complaint";
		$this->load->view('head', $data);
		$this->load->view('nav', $data);
		$this->load->view('post', $data);
		$this->load->view('footer', $data);
	}
	
	public function view($id) {
		$this->load->database();
		$query = $this->db->query('SELECT * FROM pengaduan WHERE id_pengaduan='. $id .' LIMIT 1');
		if ($query->num_rows() == 0) {
			$data['title'] = "Terra Park - Complaint Not Found";
			$this->load->view('head', $data);
			$this->load->view('nav', $data);
			$this->load->view('postNotFound', $data);
		} else {
			$data['aduan'] = $query->row();
			$data['title'] = $data['aduan']->judul;
			$this->load->view('head', $data);
			$this->load->view('nav', $data);
			$this->load->view('post', $data);
		}
		$this->load->view('footer', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */