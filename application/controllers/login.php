<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function index()
	{
		if (!empty($_POST['name'])  		&&
			!empty($_POST['pass']))
				{
			$this->load->database();
			$query = $this->db->query('SELECT * FROM user');
			$valid = false;
			$data['message'] = "Username atau password salah.";
			foreach ($query->result() as $row){
				if ($row->username == $_POST['name'] && $row->password == hash("md5", $_POST['pass'])) {
					$valid = true;
					$data['message'] = "Anda telah berhasil login.";
					$this->session->set_userdata('login', $_POST['name']);
					$this->session->set_userdata('role', $row->role);
					break;
				}
			}
			$data['title'] = "Login";
			$this->load->view('head', $data);
			$this->load->view('nav', $data);
			$this->load->view('loginResult', $data);
			$this->load->view('footer', $data);
		} else {
			$data['title'] = "Login";
			$this->load->view('head', $data);
			$this->load->view('nav', $data);
			$this->load->view('login', $data);
			$this->load->view('footer', $data);
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */