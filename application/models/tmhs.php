<?php
class Tmhs extends CI_Model
{
	function getMhs()
	{
		return $this->db->get('tmhs')->result();
	}

}
?>