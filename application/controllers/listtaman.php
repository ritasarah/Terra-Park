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
	public function edit($id)
	{
		if (!($this->session->userdata('role') == "admin" || $this->session->userdata('role') == "dinas")) {
			$this->load->view('forbidden');
			return false;
		}
		$data['title'] = "Tambah Data Taman Baru";
		$this->load->database();
		$query = $this->db->query('SELECT * FROM taman WHERE id_taman=' . $id . ' LIMIT 1');
		if ($query->num_rows() == 0) {
			$data['title'] = "Terra Park - Taman Not Found";
			$this->load->view('head', $data);
			$this->load->view('nav', $data);
			$this->load->view('postNotFound', $data);
		} else {
			$data['idT'] = $id;
			$data['nama'] = $query->row()->nama;
			$data['lokasi'] = $query->row()->lokasi;
			$this->load->view('head', $data);
			$this->load->view('nav', $data);
			$this->load->view('addtaman', $data);
			$this->load->view('footer', $data);
		}
	}
	public function delete($id)
	{
		if (!($this->session->userdata('role') == "admin" || $this->session->userdata('role') == "dinas")) {
			$this->load->view('forbidden');
			return false;
		}
		$data['title'] = "Tambah Data Taman Baru";
		$this->load->database();
		$this->db->simple_query('DELETE FROM taman WHERE id_taman=' . $id);
		$data['listTaman'] = $this->db->query('SELECT * FROM taman');
		$this->load->view('head', $data);
		$this->load->view('nav', $data);
		$this->load->view('listtaman', $data);
		$this->load->view('footer', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */