<?php
class Msearch extends CI_Model {


	function search() {
		$NIM = $this->input->post('NIM'); // 'menangkap' data yang diinput dari form pd views
		$sql = "SELECT * FROM tmhs WHERE NIM LIKE ?";
		//$query  = $this->db->like('NIM',$NIM);

		return $this->db->query($sql, array($NIM))->result(); 
		//$this->db->insert('tmhs', $data);
		//$this->db->get('tmhs');
	 //$this->db->like('NIM', '$NIM', 'after'); 
		//return $this->db->get('tmhs')->result();
	}

}
?>
