<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Diagnosa extends CI_Controller 

{

	 public function __construct()
    {
        parent::__construct();
        $this->load->model('Diagnosa_model');
        $this->load->library('form_validation');
       

    }

	public function index()
	{
		$data['title'] = 'Data Diagnosa';
		$data['db_user'] = $this->db->get_where('db_user',['email' =>
		$this->session->userdata('email')])->row_array();

		$data['diagnosa'] = $this->db->get('db_diagnosa')->result_array();
		if( $this->input->post('keyword') ) {
            $data['diagnosa'] = $this->Diagnosa_model->cariDataDiagnosa();
        }

		$this->form_validation->set_rules('diagnosa', 'Diagnosa', 'required');

		if($this->form_validation->run() == false ) {

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('diagnosa/index', $data);
		$this->load->view('templates/footer');


		}else {
			$this->db->insert('db_diagnosa', ['diagnosa' => $this->input->post('diagnosa')]);
			$this->session->set_flashdata('message', '<div class="alert alert-succes" role="alert">
  			Berhasil Ditambahkan
			</div>');
			redirect('diagnosa');

		}
	}

	public function hapus($id)
    {
        $this->Diagnosa_model->hapusDataDiagnosa($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('diagnosa');
    }


 public function ubah($id)
    {
        $data['title'] = 'Form Ubah Data Diagnosa';
        $data['db_user'] = $this->db->get_where('db_user',['email' =>
        $this->session->userdata('email')])->row_array();
        $data['diagnosa'] = $this->Diagnosa_model->getDiagnosaById($id);      

       $this->form_validation->set_rules('diagnosa', 'Diagnosa', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('diagnosa/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Diagnosa_model->ubahDataDiagnosa();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('diagnosa');
        }
    }

}
