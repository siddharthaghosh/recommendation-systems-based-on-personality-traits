<?php
class modelPemesanan extends CI_Model
{
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
	function getCart($id_pesanan)
	{
		$sql = "select b.kd_jenis,
		(select nama_tim from jersey a where a.kd_jersey = b.kd_jersey)
		,ukuran
		,jenis_jersey
		,bahan
		,harga
		,ket
		,qty
		from jenis_jersey b, temp_cart c
		where c.kd_jenis = b.kd_jenis and c.id_pesanan = $id_pesanan 
		";
		return $this->db->query($sql)->result(); 
		
	}
	function insertpemesanan($id,$nama,$alamat,$notelp,$harga)
	{
		$data = array(
			'ID_PESANAN' => $id,
			'NAMA_PEMESAN' => $nama,
			'ALAMAT' => $alamat,
			'NO_TELP' => $notelp,
			'HARGA_TOTAL' => $harga
			);
		$this->db->insert('pemesanan', $data);
			
		
		
	}
	function getNextIdPesanan()
	{
		$query = "SELECT MAX(id_pesanan)+1 FROM pemesanan";
		return $this->db->query($query)->result(); 
	
	}
	function getOneJersey($id)
	{
		
		
		$sql = "SELECT kd_jenis,
		(select nama_tim from jersey a where a.kd_jersey = b.kd_jersey)
		,ukuran
		,jenis_jersey
		,bahan
		,harga
		,ket
		,stok
		from jenis_jersey b 
		where kd_jenis = $id
		";
		// $this->db->where('KD_JENIS',$id);
		// $data = $this->db->get('JENIS_JERSEY');
		// return $data;
		
		return $this->db->query($sql)->result();
	}
	
	function pesan($kd_jenis,$id_pesanan,$qty) {
		 
		 //$sql = "insert into PESAN value ($kd_jenis,$id_pesanan,$qty)";
		
		$data = array(
			'KD_JENIS' => $kd_jenis,
			'ID_PESANAN' => $id_pesanan,
			'QTY' => $qty
			);
		$this->db->insert('temp_cart', $data);
		 //$this->db->query($sql)->result();
	}

}
?>