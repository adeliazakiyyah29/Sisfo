<?php
/**
* 
*/
class Edit_krs extends CI_Controller
{
	
	public function index(){
		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/sidebar');
		$this->load->view('administrator/edit_krs');
		$this->load->view('template_administrator/footer');
	}
}