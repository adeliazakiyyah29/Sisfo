<?php
/**
* 
*/
class Auth extends CI_Controller
{
	
	public function index(){
		$this->load->view('template_administrator/header');
		$this->load->view('administrator/login');
		$this->load->view('template_administrator/footer');
	}

	//function proses login
	public function proses_login(){
		$this->form_validation->set_rules('username','username','required',['required' => 'username wajib diisi']);
		$this->form_validation->set_rules('password','password','required',['required' => 'password wajib diisi']);
		if ($this->form_validation->run() == FALSE) { //klo salah balik ke form login
			$this->load->view('template_administrator/header');
			$this->load->view('administrator/login');
			$this->load->view('template_administrator/footer');
		}else{  //klo bener lakuin pengecekan ke db
			$username =$this->input->post('username');
			$password =$this->input->post('password');

			//nama variabel input
			$user = $username;
			$pass = MD5($password);

			$cek = $this->login_model->cek_login($user, $pass);

			if($cek->num_rows() > 0){
				foreach ($cek->result as $ck) {
					$sess_data['username'] = $ck->username;
					$sess_data['email'] = $ck->email;
					$sess_data['level'] = $ck->level;

					$this->session->set_userdata($sess_data);
				} redirect('administrator/dashboard');
				//if($sess_data['level'] == 'admin'){
				//	redirect('administrator/dashboard');
				//}else{
				//	$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
				//					  username atau password anda salah!
				//					  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				//					</div>');
				//	redirect('administrator/auth');
				//}
				
			}else{
				$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
												  username atau password anda salah!
												  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
												    <span aria-hidden="true">&times;</span>
												  </button>
												</div>');
					redirect('administrator/auth');
			} 

		}
	}


	//function logout
	public function logout(){
		$this->session->sess_destroy();
		redirect('administrator/auth');
	}
}