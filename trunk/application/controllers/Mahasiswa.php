<?php
class Mahasiswa extends CI.Controller {
	
 

	function tambahdata() {			
			if ($this->input->post('submit')) {
				$this->load->model('mkomentarr');
				$this->mkomentarr->tambah();
				//redirect('ckomentarr/index');
			}
		$this->load->view('tambahkomentarr');
	}
	
  
	
	//function ckomentar() {
	//parent::Controller();
	//$this->load->scaffolding('komentar');
  //}

}
?>