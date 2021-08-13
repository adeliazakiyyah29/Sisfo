<?php  

/**
* 
*/
class Krs extends CI_Controller
{
	
	public function index(){
		$data['krs'] = $this->m_tamkrs->tampil_data('krs')->result();
		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/sidebar');
		$this->load->view('administrator/tampil_krs',$data);
		$this->load->view('template_administrator/footer');
	}

	public function input(){
		$data = array(
				
				'kelas' => set_value('kelas'),
				'kode_matkul' => set_value('kode_matkul'),
				'matkul' => set_value('matkul'),
				'sks' => set_value('sks'),
				'nim' => set_value('nim'),
			);
		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/sidebar');
		$this->load->view('administrator/tambah_krs',$data);
		$this->load->view('template_administrator/footer');
	}

	public function input_aksi(){
		$this->_rules();
		if($this->form_validation->run() == FALSE){
			$this->input();
		}else{
			$data = array(
				
				'kelas' => $this->input->post('kelas',TRUE),
				'kode_matkul' => $this->input->post('kode_matkul',TRUE),
				'matkul' => $this->input->post('matkul',TRUE),
				'sks' => $this->input->post('sks',TRUE),
				'nim' => $this->input->post('nim',TRUE),
			);
			$this->m_tamkrs->input_data($data);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
												  Data Anda Berhasil Ditambahkan :)
												  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
												    <span aria-hidden="true">&times;</span>
												  </button>
												</div>');
			redirect('administrator/krs');
		}
	}

	public function _rules(){
		$this->form_validation->set_rules('kelas','kelas','required',['required' => 'kelas wajib diisi!']);
		$this->form_validation->set_rules('kode_matkul','kode_matkul','required',['required' => 'kode Matkul wajib diisi!']);
		$this->form_validation->set_rules('matkul','matkul','required',['required' => 'Matkul wajib diisi!']);
		$this->form_validation->set_rules('sks','sks','required',['required' => 'SKS wajib diisi!']);
		$this->form_validation->set_rules('nim','nim','required',['required' => 'Nim wajib diisi!']);
	}

//bagian edit data 
	public function update($id){
		$where = array('id_krs' => $id);
		$data['krs'] = $this->m_tamkrs->edit_data($where,'krs')->result();
		$this->load->view('template_administrator/header');
		$this->load->view('template_administrator/sidebar');
		$this->load->view('administrator/krs_update',$data);
		$this->load->view('template_administrator/footer');
	}

	public function update_aksi(){
		$id = $this->input->post('id_krs');
		$kelas = $this->input->post('kelas');
		$kode_matkul = $this->input->post('kode_matkul');
		$matkul = $this->input->post('matkul');
		$sks = $this->input->post('sks');
		$nim = $this->input->post('nim');

		$data = array(

			'kelas' => $this->input->post('kelas',TRUE),
			'kode_matkul' => $this->input->post('kode_matkul',TRUE),
			'matkul' => $this->input->post('matkul',TRUE),
			'sks' => $this->input->post('sks',TRUE),
			'nim' => $this->input->post('nim',TRUE),
		);

		$where = array('id_krs' => $id);
		$this->m_tamkrs->update_data($where,$data,'krs');
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
												  Data Anda Berhasil Diubah :)
												  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
												    <span aria-hidden="true">&times;</span>
												  </button>
												</div>');
		redirect('administrator/krs');
	}

	// public function editmenu(){

 //    $data = array(
 //        'kelas' => $this->input->post('kelas',TRUE),
	// 	'kode_matkul' => $this->input->post('kode_matkul',TRUE),
	// 	'matkul' => $this->input->post('matkul',TRUE),
	// 	'sks' => $this->input->post('sks',TRUE),
	// 	'nim' => $this->input->post('nim',TRUE),
	// 	);

 //    $this->db->set($data);
 //    $this->db->where('id', $data['id']);
 //    $this->db->update('krs');
 //    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
 //    Menu berhasil diedit!</div>');
 //    redirect('menu');
    
 //    // var_dump($menu);
 //    // die;

 //    }

	//bagian hapus alias delete
	public function delete($id){
		$where = array('id_krs' => $id);
		$this->m_tamkrs->hapus_data($where,'krs');
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
												  Data Anda Berhasil Dihapus 
												  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
												    <span aria-hidden="true">&times;</span>
												  </button>
												</div>');
		redirect('administrator/krs');
	}
}