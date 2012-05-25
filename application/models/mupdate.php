<?php
class Mupdate extends CI_Model {


	function update() {
		$NIM = $this->input->post('nim'); // 'menangkap' data yang diinput dari form pd views
		$Nama = $this->input->post('nama'); // 'menangkap' data yang diinput dari form pd views
		$IP = $this->input->post('ip'); // 'menangkap' data yang diinput dari form pd views
		$data = array(
			'NIM' => $NIM,
			'Nama' => $Nama,
			'IP' => $IP
			);
		$this->db->where('nim', $NIM);
		$this->db->update('tmhs', $data);
	}
	function getByNIM($nim)
	{
		$query = $this->db->get_where('tmhs',array('NIM'=> $nim));
		return $query->row_array();
	}

}
?>
