<?php
class Cinsert extends CI_Controller {
	
 
//	function _construct()
	//{
		//parent::Controller();
		//$this->load->view('viewinsert');
//	}
	
	function tambahdata() {			
			if ($this->input->post('submit')) {
				$this->load->model('modelinsert');
				$this->modelinsert->tambah();
				//redirect('ckomentarr/index');
			}
		$this->load->view('viewinsert');
	}

}
?>