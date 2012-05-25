<?php
class CSearch extends CI_Controller {

	
	function cariData() {			
			if ($this->input->post('submit')) 
			{
				$this->load->model('msearch');
				$this->msearch->search();
				//redirect('ckomentarr/index');
				$data['mhs'] = $this->msearch->search();
		
				$this->load->view('home_view',$data);
			}
		$this->load->view('viewsearch');
	}

}
?>