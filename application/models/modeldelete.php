<?php
class Modeldelete extends CI_Model {


	function delete() {
		$NIM = $this->input->post('NIM'); // 'menangkap' data yang diinput dari form pd views
			
		$this->db->delete('tmhs', array('NIM' => $NIM));
	}

}
?>
