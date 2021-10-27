<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Medis extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Medis_model');
        $this->load->library('form_validation');
    }


    public function index()
    {
        $data['title'] = 'Rekam Medis';
        $data['db_user'] = $this->db->get_where('db_user',['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('id_hewan', 'Hewan', 'required');
        $this->form_validation->set_rules('jenis_hewan', 'Jenis Hewan', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('umur', 'Umur', 'required');
        $this->form_validation->set_rules('id_peternak', 'Peternak', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('daerah', 'Daerah', 'required');
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required');
        $this->form_validation->set_rules('no_telpon', 'Notelp', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('diagnosa', 'Diagnosa', 'required');
        $this->form_validation->set_rules('vaksin', 'Vaksin', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
        $this->form_validation->set_rules('tahun', 'Tahun', 'required');
        if($this->form_validation->run() == false ) {
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('medis/index', $data);
        $this->load->view('templates/footer');
    }else
     {
            $this->Medis_model->tambahDataMedis();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('medis');
     }
function form_penjualan_autocomplit() {
        $id_hewan = $_GET['id_hewan'];
        $sql_hewan = "SELECT * FROM `db_hewan` WHERE id_hewan='$id_hewan' ";
        $db_hewan = $this->db->query($sql_hewan)->row_array();
        $data = array(
            'id_hewan' => $db_hewan['id_hewan'],
            'jenis_hewan' => $db_hewan['jenis_hewan'],
        );
        echo json_encode($data);
    }
}
}
