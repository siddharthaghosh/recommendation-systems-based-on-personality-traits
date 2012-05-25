<?php
class Cdelete extends CI_Controller {
	
 
//	function _construct()
	//{
		//parent::Controller();
		//$this->load->view('viewinsert');
//	}
	
	function deletedata() {			
			if ($this->input->post('submit')) {
				$this->load->model('modeldelete');
				$this->modeldelete->delete();
				//redirect('ckomentarr/index');
			}
		$this->load->view('view_delete');
	}

}
?>