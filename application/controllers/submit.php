<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class submit extends CI_Controller {
	
	public function index()
	{
		if(	empty($_POST['name'])  		||
			empty($_POST['email']) 		||
			empty($_POST['park']) 		||
			empty($_POST['message'])	||
			!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
				{
			$this->load->database();
			$data['title'] = "Pengajuan Aduan";
			$this->load->view('head', $data);
			$this->load->view('nav', $data);
			$this->load->view('submit', $data);
			$this->load->view('footer', $data);
			return true;
		} else {
			$this->load->database();
			/*$query = $this->db->query('SELECT name, title, email FROM calogerus_terarium');

			foreach ($query->result() as $row)
			{
				echo $row->title;
				echo $row->name;
				echo $row->email;
			}*/
		}
		
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */