<?php
class Blog3 extends CI_Controller
{
	function index()
	{
	$data['title'] = "My First Title";
	$data['heading'] = "My First Heading";
	$data['tugas'] = array('tugas1','tugas2','tugas3');
	
	$this->load->view('view_blog3',$data);
	
	}
}

?>