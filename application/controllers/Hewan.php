<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokter extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Hewan_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Peternak';
		$data['db_user'] = $this->db->get_where('db_user',['email' =>
		$this->session->userdata('email')])->row_array();

		$data['id_hewan'] = $this->db->get('db_hewan')->result_array();
        $this->form_validation->set_rules('id_hewan', 'Hewan', 'required');
        $this->form_validation->set_rules('jenis_hewan', 'Jenis', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Kelamin', 'required');
        $this->form_validation->set_rules('umur', 'Umur', 'required');
		$this->form_validation->set_rules('id_peternak', 'Peternak', 'required');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('daerah', 'Daerah', 'required');
		$this->form_validation->set_rules('no_telpon', 'Notelp', 'required');
		$this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');


		if($this->form_validation->run() == false ) {

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('hewan/index', $data);
		$this->load->view('templates/footer');


    } else {

    	$data = [
            'id_hewan' => $this->input->post('id_hewan'),
            'jenis_hewan' => $this->input->post('jenis_hewan'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'umur' => $this->input->post('umur'),
			'id_peternak' => $this->input->post('id_peternak'),
			'nama' => $this->input->post('nama'),
			'daerah' => $this->input->post('daerah'),
			'no_telpon' => $this->input->post('no_telpon'),
			'pekerjaan' => $this->input->post('pekerjaan'),
			'alamat' => $this->input->post('alamat')
					 ];
		$this->db->insert('db_hewan', $data);
		$this->session->set_flashdata('message', '<div class="alert alert-succes" role="alert">
  		Berhasil Ditambahkan
		</div>');
		redirect('hewan');
    }

 }

 public function hapus($id)
    {
        $this->Hewan_model->hapusDataHewan($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('hewan');
    }

    

   

    //hewan ternak 

    

 }

     

 
