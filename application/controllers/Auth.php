<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 

{ 

	public function __construct()

	{

		parent::__construct();  //panggil method cunstruct di CI Controler
		$this->load->library('form_validation');



	}

	public function index()

	{
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		if($this->form_validation->run() == false) {
		$data['title'] = 'Form | Login';
		$this->load->view('templates/auth_header', $data);
		$this->load->view('auth/login');
		$this->load->view('templates/auth_footer');

		} 
		else 
		{
		$this->_login();
		}
		


	}

	private function _login()

	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$db_user = $this->db->get_where('db_user', ['email' => $email])->row_array();
		if($db_user){
			if($db_user['is_active'] == 1){
				if(password_verify($password, $db_user['password'])){
					$data = [
						'email' => $db_user['email'],
						'role_id' => $db_user['role_id']


					];
					$this->session->set_userdata($data);
					if($db_user['role_id'] == 1){
					redirect('admin');	
					}if ($db_user['role_id'] == 2) {
					redirect('user');	
					} else {
						redirect('dokter');
					}
					

				}else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
  			Password Salah!!
			</div>');
			redirect('auth');
				}
			}else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
  			 belum diaktifasi!!
			</div>');
			redirect('auth');
			}
		}else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
  			User Belum Terdaftar!!
			</div>');
			redirect('auth');
		}
	}

	public function registration()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[db_user.email]', [
			'is_inique' => 'email yang anda inputkan sama'

		]);
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|matches[password2]', [
			'matcher' => 'password tidak sama!'
		]);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

		if( $this->form_validation->run() == false) {

		$data['title'] = 'Form | Registrasi';
		$this->load->view('templates/auth_header', $data);
		$this->load->view('auth/registration');
		$this->load->view('templates/auth_footer');

		} else {
			$email = $this->input->post('email', true);
			$data = [
				'nama' => htmlspecialchars($this->input->post('nama', true)),
				'email' => htmlspecialchars($email),
				'gambar' => 'default.jpg',
				'password' => password_hash($this->input->post('password1'),PASSWORD_DEFAULT),
				'role_id' => 2,
				'is_active' =>1,
				'tanggal_pembuat' => time() 

			];
            $this->db->insert('db_user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat Akun Anda Telah Aktif. Silahkan Login</div>');
            redirect('auth');
		}
	}
	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
  		akun anda telah berhasil Logout
		</div>');
		redirect('auth');
	}

}
