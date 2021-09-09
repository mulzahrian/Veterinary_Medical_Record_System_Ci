<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vaksin extends CI_Controller 

{
	 public function __construct()
    {
        parent::__construct();
        $this->load->model('Vaksin_model');
        $this->load->library('form_validation');
       

    }

	public function index()
	{
		$data['title'] = 'Data Vaksin';
		$data['db_user'] = $this->db->get_where('db_user',['email' =>
		$this->session->userdata('email')])->row_array();

		$data['vaksin'] = $this->db->get('db_vaksin')->result_array();

		if( $this->input->post('keyword') ) {
            $data['vaksin'] = $this->Vaksin_model->cariDataVaksin();
        }

		$this->form_validation->set_rules('vaksin', 'Vaksin', 'required');

		if($this->form_validation->run() == false ) {

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('vaksin/index', $data);
		$this->load->view('templates/footer');


		}else {
			$this->db->insert('db_vaksin', ['vaksin' => $this->input->post('vaksin')]);
			$this->session->set_flashdata('message', '<div class="alert alert-succes" role="alert">
  			Berhasil Ditambahkan
			</div>');
			redirect('vaksin');

		}
	}
public function hapus($id)
    {
        $this->Vaksin_model->hapusDataVaksin($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('vaksin');
    }

 public function ubah($id)
    {
        $data['title'] = 'Form Ubah Data Vaksin';
        $data['db_user'] = $this->db->get_where('db_user',['email' =>
        $this->session->userdata('email')])->row_array();
        $data['vaksin'] = $this->Vaksin_model->getVaksinById($id);
        
       $this->form_validation->set_rules('vaksin', 'Vaksin', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('vaksin/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Vaksin_model->ubahDataVaksin();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('vaksin');
        }
    }


}
