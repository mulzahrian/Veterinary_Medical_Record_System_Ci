<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokter extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Dokter_model');
        $this->load->library('form_validation');
        
    }

    public function index()
    {
        $data['title'] = 'Peternak';
		$data['db_user'] = $this->db->get_where('db_user',['email' =>
		$this->session->userdata('email')])->row_array();

		$data['id_peternak'] = $this->db->get('db_peternak')->result_array();

		$this->form_validation->set_rules('id_peternak', 'Peternak', 'required');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('daerah', 'Daerah', 'required');
		$this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');


		if($this->form_validation->run() == false ) {

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('dokter/index', $data);
		$this->load->view('templates/footer');


    } else {

    	$data = [
			'id_peternak' => $this->input->post('id_peternak'),
			'nama' => $this->input->post('nama'),
			'daerah' => $this->input->post('daerah'),
			'pekerjaan' => $this->input->post('pekerjaan'),
			'alamat' => $this->input->post('alamat')
					 ];
		$this->db->insert('db_peternak', $data);
		$this->session->set_flashdata('message', '<div class="alert alert-succes" role="alert">
  		Berhasil Ditambahkan
		</div>');
		redirect('dokter');
    }

 }

 public function hapus($id)
    {
        $this->Dokter_model->hapusDataPeternak($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('dokter');
    }

    public function detail($id)
    {
        $data['title'] = 'Detail Data Peternak';
        $data['db_peternak'] = $this->Dokter_model->getPeternakById($id);
        $this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('dokter/index', $data);
		$this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['title'] = 'Form Ubah Data Peternak';
        $data['db_user'] = $this->db->get_where('db_user',['email' =>
        $this->session->userdata('email')])->row_array();
        $data['id_peternak'] = $this->Dokter_model->getPeternakById($id);
        

       //$this->form_validation->set_rules('id_hewan', 'Hewan', 'required');
        $this->form_validation->set_rules('nama', 'nama', 'required');
        //$this->form_validation->set_rules('jenis_kelamin', 'Kelamin', 'required');
        //$this->form_validation->set_rules('umur', 'Umur', 'required');
        //$this->form_validation->set_rules('id_peternak', 'Peternak', 'required');
        //$this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('daerah', 'Daerah', 'required');
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('dokter/ubah', $data);
			$this->load->view('templates/footer');
        } else {
            $this->Dokter_model->ubahDataPeternak();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('dokter');
        }
    }

    //hewan ternak 

public function hewan()
    {
        $data['title'] = 'Hewan';
		$data['db_user'] = $this->db->get_where('db_user',['email' =>
		$this->session->userdata('email')])->row_array();


        $data['id_hewan'] = $this->db->get('db_hewan')->result_array();


		

        $this->form_validation->set_rules('id_hewan', 'Hewan', 'required');
        //$this->form_validation->set_rules('id_hewan2', 'Hewan2', 'required');
        $this->form_validation->set_rules('jenis_hewan', 'Jenis', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Kelamin', 'required');
        $this->form_validation->set_rules('umur', 'Umur', 'required');
		$this->form_validation->set_rules('id_peternak', 'Peternak', 'required');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('daerah', 'Daerah', 'required');
		$this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');


		if($this->form_validation->run() == false ) {

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('dokter/hewan', $data);
		$this->load->view('templates/footer');


    } else {

    	$data = [
            'id_hewan' => $this->input->post('id_hewan'),
            //'id_hewan2' => $this->input->post('id_hewan2'),
            'jenis_hewan' => $this->input->post('jenis_hewan'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'umur' => $this->input->post('umur'),
			'id_peternak' => $this->input->post('id_peternak'),
			'nama' => $this->input->post('nama'),
			'daerah' => $this->input->post('daerah'),
			'pekerjaan' => $this->input->post('pekerjaan'),
			'alamat' => $this->input->post('alamat')
					 ];
		$this->db->insert('db_hewan', $data);
		$this->session->set_flashdata('message', '<div class="alert alert-succes" role="alert">
  		Berhasil Ditambahkan
		</div>');
		redirect('dokter/hewan');
    }

 }

 public function hapus_hewan($id)
    {
        $this->Dokter_model->hapusDataHewan($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('dokter/hewan');
    }

public function detailhewan($id)
    {
        $data['title'] = 'Detail Data Peternak';
        $data['db_hewan'] = $this->Dokter_model->getHewanById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('dokter/hewan', $data);
        $this->load->view('templates/footer');
    }

 

    public function ubahhewan($id)
    {
        $data['title'] = 'Form Ubah Data Hewan';
        $data['db_user'] = $this->db->get_where('db_user',['email' =>
        $this->session->userdata('email')])->row_array();
        $data['id_hewan'] = $this->Dokter_model->getHewanById($id);
        

       $this->form_validation->set_rules('id_hewan', 'Hewan', 'required');
        $this->form_validation->set_rules('jenis_hewan', 'Jenis', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Kelamin', 'required');
        $this->form_validation->set_rules('umur', 'Umur', 'required');
        $this->form_validation->set_rules('id_peternak', 'Peternak', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('daerah', 'Daerah', 'required');
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('dokter/ubahhewan', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Dokter_model->ubahDataHewan();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('dokter/hewan');
        }
    }

function form_penjualan_autocomplit() {
        $id_peternak = $_GET['id_peternak'];
        //$sql_barang = "SELECT tb.nama_barang,ts.satuan,tb.harga_jual,tb.stok_barang FROM tbl_barang as tb, tbl_satuan as ts where tb.barang_satuan=ts.id_satuan and kd_barang='$kd_barang' ";
        $sql_peternak = "SELECT * FROM `db_peternak` WHERE id_peternak='$id_peternak' ";
        $db_peternak = $this->db->query($sql_peternak)->row_array();
        $data = array(
            'id_peternak' => $db_peternak['id_peternak'],
            'nama'      => $db_peternak['nama'],
            'daerah' => $db_peternak['daerah'],
            'pekerjaan'  => $db_peternak['pekerjaan'],
            'alamat'  => $db_peternak['alamat'],
        );
        echo json_encode($data);
    }

    function form_penjualan1_autocomplit() {
        $id_hewan = $_GET['id_hewan'];
        //$sql_barang = "SELECT tb.nama_barang,ts.satuan,tb.harga_jual,tb.stok_barang FROM tbl_barang as tb, tbl_satuan as ts where tb.barang_satuan=ts.id_satuan and kd_barang='$kd_barang' ";
        $sql_peternak = "SELECT * FROM `db_hewan` WHERE id_hewan='$id_hewan' ";
        $db_peternak = $this->db->query($sql_peternak)->row_array();
        $data = array(
            'id_hewan' => $db_peternak['id_hewan'],
            'jenis_hewan' => $db_peternak['jenis_hewan'],
            'jenis_kelamin' => $db_peternak['jenis_kelamin'],
            'umur' => $db_peternak['umur'],
            'id_peternak' => $db_peternak['id_peternak'],
            'nama' => $db_peternak['nama'],
            'daerah' => $db_peternak['daerah'],
            'pekerjaan' => $db_peternak['pekerjaan'],
            'alamat' => $db_peternak['alamat'],

            
            
        );
        echo json_encode($data);
    }

    function form_penjualan2_autocomplit() {
        $id_hewan2 = $_GET['id_hewan2'];
        //$sql_barang = "SELECT tb.nama_barang,ts.satuan,tb.harga_jual,tb.stok_barang FROM tbl_barang as tb, tbl_satuan as ts where tb.barang_satuan=ts.id_satuan and kd_barang='$kd_barang' ";
        $sql_peternak = "SELECT * FROM `db_hewan` WHERE id_hewan2='$id_hewan2' ";
        $db_peternak = $this->db->query($sql_peternak)->row_array();
        $data = array(
            'id_hewan2' => $db_peternak['id_hewan2'],
            'id_hewan' => $db_peternak['id_hewan'],

            
            
        );
        echo json_encode($data);
    }
 


    //hewan ternak end 

    //rekam medis mulai 

public function medis()
    {
        $data['title'] = 'Rekam Medis';
        $data['db_user'] = $this->db->get_where('db_user',['email' =>
        $this->session->userdata('email')])->row_array();

        $data['diagnosa'] = $this->db->get('db_diagnosa')->result_array();
        $data['vaksin'] = $this->db->get('db_vaksin')->result_array();
        $data['id_hewan'] = $this->db->get('db_hewan')->result_array();

        $this->form_validation->set_rules('id_hewan', 'Hewan', 'required');
        $this->form_validation->set_rules('jenis_hewan', 'Jenis Hewan', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('umur', 'Umur', 'required');
        $this->form_validation->set_rules('id_peternak', 'Peternak', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('daerah', 'Daerah', 'required');
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required');
        $this->form_validation->set_rules('gejala', 'Gejala', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('diagnosa', 'Diagnosa', 'required');
        $this->form_validation->set_rules('diagnosa1', 'Diagnosa1');
        $this->form_validation->set_rules('vaksin', 'Vaksin', 'required');
        $this->form_validation->set_rules('vaksin1', 'Vaksin1');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
        $this->form_validation->set_rules('tahun', 'Tahun', 'required');


        if($this->form_validation->run() == false ) {

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('dokter/medis', $data);
        $this->load->view('templates/footer');


    }else
     {
            $this->Dokter_model->tambahDataMedis();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('laporan');
        }
 }


 //test


 public function test($id_peternak)
    {
        $data['title'] = 'Detail Peternak';

        $data['db_user'] = $this->db->get_where('db_user',['email' =>
        $this->session->userdata('email')])->row_array();

       
        $data['coba'] = $this->Dokter_model->test2($id_peternak);

        //$data['id_hewan'] = $this->db->get('db_rekam_medis')->result_array();


    if($this->form_validation->run() == false ) {

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('dokter/test', $data);
        $this->load->view('templates/footer');


    }
}



 //test


//hewan test

public function animtest($id_hewan)
    {
        $data['title'] = 'Riwayat Rekam Medis';

        $data['db_user'] = $this->db->get_where('db_user',['email' =>
        $this->session->userdata('email')])->row_array();

       
        $data['coba1'] = $this->Dokter_model->animaltest($id_hewan);

        //$data['id_hewan'] = $this->db->get('db_rekam_medis')->result_array();


    if($this->form_validation->run() == false ) {

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('dokter/animtest', $data);
        $this->load->view('templates/footer');


    }
}


//end hew test

 



}