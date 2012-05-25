<?php
class Modelinsert extends CI_Model {


	function tambah() {
		$NIM = $this->input->post('NIM'); // 'menangkap' data yang diinput dari form pd views
		$Nama = $this->input->post('Nama'); // 'menangkap' data yang diinput dari form pd views
		$IP = $this->input->post('IP'); // 'menangkap' data yang diinput dari form pd views
		$data = array(
			'NIM' => $NIM,
			'Nama' => $Nama,
			'IP' => $IP
			);
		$this->db->insert('tmhs', $data);
	}

}
?>
