<?php
class cadmin extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('encrypt');
		
	}
	//function loginproses() {
	//		$data['isi'] = 'viewlogin';
	//		$this->load->view('tampilancssadmin', $data);
	//}
function tampilSemuaJersey()
	{
		$this->load->model('madmin');
		
		$data['jersey'] = $this->madmin->getJersey();
		$data['isi'] = 'viewJersey';
		$this->load->view('tampilancssadmin',$data);
		
		
	}
	function tampilpembayaran()
	{
		$this->load->model('madmin');
		
		$data['bayar'] = $this->madmin->getPembayaran();
		$data['isi'] = 'viewpembayaran';
		$this->load->view('tampilancssadmin',$data);
		
		
	}
	
	function login()
	{
		
	
		if($this->input->post('submitlogin'))
		{
			$this->load->model('madmin');
			$username = $this->input->post('username'); //read the username that filled by the user
			$password = $this->input->post('password'); //read the password that filled by the user
			$passwordx = md5($password); //this is for change $password into MD5 form
			//the query is to matching the username+password user with username+password from database
			
			$query = $this->madmin->getAdmin($username,$password);
			if ($query != null) {
				// if the query is TRUE, then save the username into session and load the welcome view
				
				$sessionArray = array(
				'name'=>$username,
				'logged_in'=>TRUE
				);
				$this->session->set_userdata($sessionArray);
				
				$data['isi'] = 'viewhomeadmin';
				$this->load->view('tampilancssadmin', $data);
				
			}else {
				// query error
				$data['error']='!! Wrong Username or Password !!';
				$data['isi'] = 'viewlogin';
				$this->load->view('tampilancssadmin', $data);
			}
		}else
			{
				
				$data['isi'] = 'viewlogin';
				$this->load->view('tampilancssadmin', $data);
		
				
			}
	
	}
	function viewhomeadmin()
	{
		$data['isi'] = 'viewhomeadmin';
				$this->load->view('tampilancssadmin', $data);
	}
function insertjersey()
{
	
	$data['isi'] = 'viewinsertjersey';
				$this->load->view('tampilancssadmin', $data);
	if($this->input->post('submit'))
	{
		$kd_jenis = $this->input->post('KD_JENIS');
		$kd_jersey = $this->input->post('KD_JERSEY');
		$ukuran = $this->input->post('UKURAN');
		$stok = $this->input->post('STOK');
		$jenis_jersey = $this->input->post('JENIS_JERSEY');
		$bahan = $this->input->post('BAHAN');
		$harga = $this->input->post('HARGA');
		$ket = $this->input->post('KET');
		
		$this->load->model('madmin');
		$this->madmin->insertjersey($kd_jenis,$kd_jersey,$ukuran,$stok,$jenis_jersey,$bahan,$harga,$ket);
		
		$data['isi'] = 'viewkonf';
		$data['isikonf'] = 'terimakasih';
				$this->load->view('tampilancssadmin', $data);
	}
}
	
	
	public function check_session()
	{
		if ($this->session->userdata('username') AND $this->session->userdata('logged_in')=='TRUE') {
			return TRUE;
		} else {
			return FALSE;
		}
	}
	//to do logout process
	function logout() {
		$this->session->sess_destroy();
		$data['logout'] = 'You have been logged out.';
			$data['isi'] = 'viewlogin';
			
			$this->load->view('tampilancssadmin', $data, 'refresh');
	}

}

?>