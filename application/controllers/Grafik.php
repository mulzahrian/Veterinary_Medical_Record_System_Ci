<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grafik extends CI_Controller 

{ 

	 public function __construct()
    {
        parent::__construct();
        $this->load->model('Grafik_model');
        $this->load->library('form_validation');
    }


	 function index()

	{
		$data['title'] = 'Grafik';
		$data['db_user'] = $this->db->get_where('db_user',['email' =>
		$this->session->userdata('email')])->row_array();

		//$data['diagnosa'] = $this->db->get('db_rekam_medis')->result_array();


		$data['pie_data']=$this->Grafik_model->hasil_survey();
		$data['pie_data1']=$this->Grafik_model->hasil_survey1();
		$data['pie_data2']=$this->Grafik_model->hasil_survey2();
		$data['kd2019']=$this->Grafik_model->kode2019();
		$data['kd2018']=$this->Grafik_model->kode2018();
		$data['kd2017']=$this->Grafik_model->kode2017();

		$data['sapi']=$this->Grafik_model->Sapi();
		$data['kambing']=$this->Grafik_model->Kambing();
		//daerah chart 
		$data['Kec_Bunga_Raya']=$this->Grafik_model->Kec_Bunga_Raya();
		$data['Kec_Dayun']=$this->Grafik_model->Kec_Dayun();
		$data['Kec_Kandis']=$this->Grafik_model->Kec_Kandis();
		$data['Kec_Kerinci_Kanan']=$this->Grafik_model->Kec_Kerinci_Kanan();
		$data['Kec_Koto_Gasip']=$this->Grafik_model->Kec_Koto_Gasip();
		$data['Kec_Siak']=$this->Grafik_model->Kec_Siak();
		$data['Kec_Sabak_Auh']=$this->Grafik_model->Kec_Sabak_Auh();
		$data['Kec_Tualang']=$this->Grafik_model->Kec_Tualang();
		$data['Kec_Minas']=$this->Grafik_model->Kec_Minas();
		$data['Kec_Sungai_Apit']=$this->Grafik_model->Kec_Sungai_Apit();
		$data['Kec_pusako']=$this->Grafik_model->Kec_pusako();
		$data['Kec_lubuk_dalam']=$this->Grafik_model->Kec_lubuk_dalam();
		$data['Kec_sungai_mandau']=$this->Grafik_model->Kec_sungai_mandau();
		$data['Kec_mempura']=$this->Grafik_model->Kec_mempura();

		//end daerah chart

		//2019 chart
		$data['tidak_ada19']=$this->Grafik_model->tidak_ada19();
		$data['bff_helmi19']=$this->Grafik_model->bff_helmi19();
		$data['myasis19']=$this->Grafik_model->myasis19();
		$data['Thelaziasis19']=$this->Grafik_model->Thelaziasis19();
		$data['Anorexia19']=$this->Grafik_model->Anorexia19();
		$data['Helminthiasis19']=$this->Grafik_model->Helminthiasis19();
		$data['Scabies19']=$this->Grafik_model->Scabies19();
		$data['ORF19']=$this->Grafik_model->ORF19();

		//2019 end chart

		//2018 chart
		$data['tidak_ada18']=$this->Grafik_model->tidak_ada18();
		$data['bff_helmi18']=$this->Grafik_model->bff_helmi18();
		$data['myasis18']=$this->Grafik_model->myasis18();
		$data['Thelaziasis18']=$this->Grafik_model->Thelaziasis18();
		$data['Anorexia18']=$this->Grafik_model->Anorexia18();
		$data['Helminthiasis18']=$this->Grafik_model->Helminthiasis18();
		$data['Scabies18']=$this->Grafik_model->Scabies18();
		$data['ORF18']=$this->Grafik_model->ORF18();

		//2018 end chart

		//2018 chart
		$data['tidak_ada17']=$this->Grafik_model->tidak_ada17();
		$data['bff_helmi17']=$this->Grafik_model->bff_helmi17();
		$data['myasis17']=$this->Grafik_model->myasis17();
		$data['Thelaziasis17']=$this->Grafik_model->Thelaziasis17();
		$data['Anorexia17']=$this->Grafik_model->Anorexia17();
		$data['Helminthiasis17']=$this->Grafik_model->Helminthiasis17();
		$data['Scabies17']=$this->Grafik_model->Scabies17();
		$data['ORF17']=$this->Grafik_model->ORF17();

		//2018 end chart

		


		

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('grafik/index', $data);
		$this->load->view('templates/footer');
	}

//function survey_diagnosa() {    
 //foreach($this->Grafik_model->hasil_survey()->result_array() as $row)
    //{ 
  //$data[] = array(
   //'hasil' => $row['hasil'],
   //'total' => $row['total']
          //);    
  //} 
  //echo json_encode($data);  
   //}



}