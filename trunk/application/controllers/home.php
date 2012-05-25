<?php
class Home extends CI_Controller
{
	function _consturct()
	{
		parent::Controller();
		$this->load->model('tmhs');
	}
	function index()
	{
		$data['title'] = "menampilkan data dari database";
		$data['mhs'] = $this->tmhs->getMhs();
		
		$this->load->view('home_view',$data);
		
	}
}
?>