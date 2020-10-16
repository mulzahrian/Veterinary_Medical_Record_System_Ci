<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 

{ 

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
        $this->load->library('form_validation');
    }


	public function index()

	{
		$data['title'] = 'Dashboard';
		$data['db_user'] = $this->db->get_where('db_user',['email' =>
		$this->session->userdata('email')])->row_array();

		$data['user']=$this->Admin_model->total_rows();
		$data['peternak']=$this->Admin_model->total_rows1();
		$data['hewan']=$this->Admin_model->total_rows2();

		

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('admin/index', $data);
		$this->load->view('templates/footer');
	}


}
