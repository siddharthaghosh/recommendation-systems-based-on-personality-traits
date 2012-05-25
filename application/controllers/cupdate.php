<?php
class Cupdate extends CI_Controller {

	
	function updatedata($nim) {		
		
		
		$this->load->model('mupdate');		
		$query = $this->mupdate->getByNIM($nim);
		$data ['nim'] = $nim;
		$data ['nama'] = $query['Nama'];
		$data ['ip'] = $query['IP'];
		
		$this->load->view('viewupdate',$data);
		
	}
	function subUpdate()
	{
		if($this->input->post('submit'))
		{
			$this->load->model('mupdate');
			$this->mupdate->update();
			redirect('home');
		}
	}
	

}
?>