<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller 

{ 

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Report_model');
        $this->load->library('form_validation');
    }


	public function index()

	{
		$data['title'] = 'Report';
		$data['db_user'] = $this->db->get_where('db_user',['email' =>
		$this->session->userdata('email')])->row_array();

		

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('report/index', $data);
		$this->load->view('templates/footer');
	}
//satu
	public function satu()

	{
		$data['title'] = '2019';
		$data['db_user'] = $this->db->get_where('db_user',['email' =>
		$this->session->userdata('email')])->row_array();

		$data['db_rekam_medis'] = $this->Report_model->getSatu();

		if( $this->input->post('keyword') ) {
            $data['db_rekam_medis'] = $this->Report_model->cariDataReport();
        }

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('report/satu', $data);
		$this->load->view('templates/footer');
	}


	public function detail($id)
    {
        $data['title'] = 'Detail Data Rekam Medis';
         $data['db_user'] = $this->db->get_where('db_user',['email' =>
        $this->session->userdata('email')])->row_array();

        $data['db_rekam_medis'] = $this->Report_model->getLaporanById($id);

    if($this->form_validation->run() == false ) {

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('report/detail', $data);
        $this->load->view('templates/footer');


    }
}
//satu

	//dua
	public function dua()

	{
		$data['title'] = '2018';
		$data['db_user'] = $this->db->get_where('db_user',['email' =>
		$this->session->userdata('email')])->row_array();

		$data['db_rekam_medis'] = $this->Report_model->getDua();

		if( $this->input->post('keyword') ) {
            $data['db_rekam_medis'] = $this->Report_model->cariDataReport();
        }

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('report/dua', $data);
		$this->load->view('templates/footer');
	}
//dua

	//dua
	public function tiga()

	{
		$data['title'] = '2017';
		$data['db_user'] = $this->db->get_where('db_user',['email' =>
		$this->session->userdata('email')])->row_array();

		$data['db_rekam_medis'] = $this->Report_model->getTiga();

		if( $this->input->post('keyword') ) {
            $data['db_rekam_medis'] = $this->Report_model->cariDataReport();
        }

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('report/tiga', $data);
		$this->load->view('templates/footer');
	}
//dua

}
