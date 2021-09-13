//Manage UserData
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usermanage extends CI_Controller 

{ 

	 public function __construct()
    {
        parent::__construct();
        $this->load->model('Usermanage_model');
        $this->load->library('form_validation');
        
    }


	public function index()

	{
		$data['title'] = 'User Management';
		$data['db_user'] = $this->db->get_where('db_user',['email' =>
		$this->session->userdata('email')])->row_array();

		$data['usermanage'] = $this->db->get('db_user')->result_array();
		

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('usermanage/index', $data);
		$this->load->view('templates/footer');
	}

	public function hapus($id)
    {
        $this->Usermanage_model->hapusDataUser($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('usermanage');
    }

	public function ubah($id)
    {
        $data['title'] = 'Form Ubah Data User';
        $data['db_user'] = $this->db->get_where('db_user',['email' =>
        $this->session->userdata('email')])->row_array();
        $data['ubah'] = $this->Usermanage_model->getUserById($id);
        
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('role_id', 'role_id', 'required');
        $this->form_validation->set_rules('is_active', 'is_active', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('usermanage/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Usermanage_model->ubahDataUser();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('usermanage');
        }
    }
}
