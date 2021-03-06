<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class processor extends CI_Controller {
	
	public function index()
	{
		if (!empty($_POST['name'])  		&&
			!empty($_POST['email']) 		&&
			!empty($_POST['park']) 		&&
			!empty($_POST['title'])	&&
			!empty($_POST['message'])	&&
			filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
				{
			$this->load->database();
			$curDate = date('Y-m-d');
			$data = array(
				'nama' => $_POST['name'],
				'email' => $_POST['email'],
				'id_taman' => $_POST['park'],
				'deskripsi' => $_POST['message'],
				'judul' => $_POST['title'],
				'status' => "unverified",
				'tanggal' => $curDate
            );
			$this->db->insert('pengaduan', $data); 
			echo "new ticket inserted. YAAY";
		} else if (	!empty($_POST['name'])  	&&
					!empty($_POST['location']) &&
					!empty($_POST['id']))
				{
			$this->load->database();
			if($_POST['id'] === 0) {
				$data = array(
					'nama' => $_POST['name'],
					'lokasi' => $_POST['location']
				);
				$this->db->insert('taman', $data); 
				echo "new taman inserted. YAAY";
			} else {
				$this->db->query('UPDATE taman SET nama="'. $_POST['name'] .'", lokasi="'. $_POST['location'] .'" WHERE id_taman=' . $_POST['id']);
				echo "taman edited. YAAY";
			}
		} else if (	!empty($_POST['name'])  	&&
					!empty($_POST['pass'])		&&
					!empty($_POST['role'])		&&
					!empty($_POST['affi']))
				{
			$this->load->database();
			$data = array(
				'username' => $_POST['name'],
				'password' => hash("md5",$_POST['pass']),
				'role' => $_POST['role'],
				'id_skpd' => $_POST['affi']
            );
			$this->db->insert('user', $data); 
			echo "new user inserted. YAAY";
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */