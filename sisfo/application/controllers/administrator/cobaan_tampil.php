<?php  

/**
* 
*/
class Cobaan_tampil extends CI_Controller
{
	
	public function index(){
		$data['krs'] = $this->m_tamkrs->tampil_data('krs')->result();
		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/sidebar');
		$this->load->view('administrator/cobaan_tampil',$data);
		$this->load->view('template_administrator/footer');
	}
}