<?php
class CPemesanan extends CI_Controller
{
	function index()
	{
		
		$data['isi'] = 'tampilHome';
		$this->load->view('tampilancss',$data);
// 			
	}	
	function detailJersey()
	{
		$id = $this->uri->segment(3);	
		if($id != null)
		{	
		$this->load->model('modelPemesanan');
		
		
		
		$data['oneJersey'] = $this->modelPemesanan->getOneJersey($id);
		//$data['jersey'] = $this->modelPemesanan->getJersey();
		$data['idpesanan'] = $this->modelPemesanan->getNextIdPesanan();
		$data['isi'] = 'viewDetail';
		$this->load->view('tampilancss',$data);
		}
		else
			{
				if($this->input->post('submit'))
				{
						$qty = $this->input->post('qty');
						$kd_jenis = $this->input->post('kd');
						
						 $this->load->model('modelPemesanan');
						// $id = $this->uri->segment(3);
						$id_pesanan = $this->input->post('id_pesanan');
						
						$this->modelPemesanan->pesan($kd_jenis,$id_pesanan,$qty);
						redirect('cPemesanan/tampilkonf');
					
				}
			}
	}
	function pemesanan()
	{
		
		$this->load->model('modelPemesanan');
		
		
		$data['idpesanan'] = $this->modelPemesanan->getNextIdPesanan();
		$data['jersey'] = $this->modelPemesanan->getJersey();
		
		$data['isi'] = 'viewPemesanan';
		$this->load->view('tampilancss',$data);
		
		
	}
	function tampilIsiCart()
	{
		
		
		 
		 if($this->input->post('submitcari') )
		{
			
			$this->load->model('modelPemesanan');
			$id_pesanan = $this->input->post('id_pesanan');
			
			$data['idpesanan'] = $this->modelPemesanan->getNextIdPesanan();
			$data['jersey'] = $this->modelPemesanan->getCart($id_pesanan);
			$data['isi'] = 'viewPemesanan';
			$this->load->view('tampilancss',$data);
			
		}
		
		 else
		 	{
		 		
				$data['isi'] = 'viewcaripemesanan';
				 $this->load->view('tampilancss',$data);
		 	}
		  
			
		if($this->input->post('submitpesan'))
			{
				$id_pesanan = $this->input->post('id_pesanan');
				$nama = $this->input->post('nama');
				$alamat = $this->input->post('alamat');
				$notelp = $this->input->post('no_telp');
				$harga = $this->input->post('hargatotal');
				
				$this->load->model('modelPemesanan');
				$this->modelPemesanan->insertpemesanan($id_pesanan,$nama,$alamat,$notelp,$harga);
				
				$data['isi'] = 'viewkonf';
				 $this->load->view('tampilancss',$data);
				
			}
						
					
	}
		
		
	
	
	function tampilSemuaJersey()
	{
		$this->load->model('modelPemesanan');
		
		$data['jersey'] = $this->modelPemesanan->getJersey();
		$data['isi'] = 'viewJersey';
		$this->load->view('tampilancss',$data);
		
		
	}
	
	function tampilHome()
	{
		$data['isi']='viewHome';
		$this->load->view('tampilancss',$data);
		
	}
	function tampilkonf()
	{
		$data['isi']='viewkonf';
		$this->load->view('tampilancss',$data);
		
	}
	function tampilCaraPemesanan()
	{
		$data['isi']='viewCaraPemesanan';
		$this->load->view('tampilancss',$data);
		
	}
	
}

?>