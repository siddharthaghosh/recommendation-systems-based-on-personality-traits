<?php
class madmin extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	}
	function getAdmin($user, $pass)
	{
		$sql = "SELECT * from admin where username = '$user' AND password = '$pass'";
		
		return $this->db->query($sql)->result(); 
		
	}
	function getPembayaran()
	{
		$sql = "SELECT *
		from pembayaran
		";
		//$query  = $this->db->like('NIM',$NIM);
		

		return $this->db->query($sql)->result(); 
		
	}
	function getJersey()
	{
		//$NIM = $this->input->post('NIM'); // 'menangkap' data yang diinput dari form pd views
		$sql = "SELECT kd_jenis,
		(select nama_tim from jersey a where a.kd_jersey = b.kd_jersey)
		,ukuran
		,jenis_jersey
		,bahan
		,harga
		,ket
		,stok
		from jenis_jersey b 
		";
		//$query  = $this->db->like('NIM',$NIM);
		

		return $this->db->query($sql)->result(); 
	}
	function insertjersey($kd_jenis,$kd_jersey,$ukuran,$stok,$jenis_jersey,$bahan,$harga,$ket)
	{
		
	
		$data = array(
			'KD_JENIS' => $kd_jenis,
			'KD_JERSEY' => $kd_jersey,
			'UKURAN' => $ukuran,
			'STOK' => $stok,
			'JENIS_JERSEY' => $jenis_jersey,
			'BAHAN' => $bahan,
			'HARGA' => $harga,
			'KET' => $ket
			
			);
			
		$this->db->insert('jenis_jersey', $data);
			
	
	}
	function checkAuth($uName,$pass){
		$this->db->select('*');
		$this->db->where('username',$uName);
		$this->db->where('password',md5($pass));
		$query = $this->db->get('admin');
		//echo $this->db->last_query();
		if($query->num_rows()>0){
			$data = $query->row_array();
			$sessionArray = array( 
			'name'=>$data['username'],
			'logged_in'=>TRUE
			);
			$this->session->set_userdata($sessionArray);
			$log=array('user_id'=>$this->session->userdata('name'),
			'action_type'=>'LOGIN',
			'item_type'=>'USER',
			'time'=>time());
			//echo $this->db->last_query();
			$this->log_message($log);
			return TRUE;
		}else{
			return FALSE;
		}
	}
	public function check_session()
	{
		if ($this->session->userdata('name') AND $this->session->userdata('logged_in')=='TRUE') {
			return TRUE;
		} else {
			return FALSE;
		}
	}
	
	public function logout(){
		$this->session->unset_userdata('id');
		$this->session->unset_userdata('logged_in');
		session_destroy();
		$log=array('user_id'=>$this->session->userdata('name'),
		'action_type'=>'LOGOUT',
		'item_type'=>'USER',
		'time'=>time());
		$this->log_message($log);
	}
	public function log_message($logArray){
		if(isset($logArray)){
			$this->db->insert('your_log',$logArray);
		}
	}
}
?>