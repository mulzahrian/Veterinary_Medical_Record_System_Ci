<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller 

{
	 public function __construct()
    {
        parent::__construct();
        $this->load->model('Laporan_model');
        $this->load->library('form_validation');
        $this->load->library('dompdf_gen');

    }

    public function index()
    {
        $data['title'] = 'Laporan Rekam Medis';

        $data['db_user'] = $this->db->get_where('db_user',['email' =>
        $this->session->userdata('email')])->row_array();

       
        $data['db_rekam_medis'] = $this->Laporan_model->getAllLaporan();

        //$data['id_hewan'] = $this->db->get('db_rekam_medis')->result_array();

        if( $this->input->post('keyword') ) {
            $data['db_rekam_medis'] = $this->Laporan_model->cariDataLaporan();
        }

    if($this->form_validation->run() == false ) {

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('laporan/index', $data);
        $this->load->view('templates/footer');


    }
}

//masuk 

public function hapus($id)
    {
        $this->Laporan_model->hapusDataLaporan($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('laporan');
    }

    public function detail($id)
    {
        $data['title'] = 'Detail Data Rekam Medis';
         $data['db_user'] = $this->db->get_where('db_user',['email' =>
        $this->session->userdata('email')])->row_array();

        $data['db_rekam_medis'] = $this->Laporan_model->getLaporanById($id);

    if($this->form_validation->run() == false ) {

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('laporan/detail', $data);
        $this->load->view('templates/footer');


    }
}

public function pdf($id)
    {
        $this->load->library('dompdf_gen');

        //$data['title'] = 'Detail Data Rekam Medis';

        $this->load->model('Laporan_model');
        $detail = $this->Laporan_model->detail_data($id);
        $data['detail'] = $detail;
        $where = array('id' => $id);
        
        
        

         //$data = array(
        //'record'  => $this->db->query("SELECT * FROM db_rekam_medis where id ='$id'"),
        //);


        //$data['db_rekam_medis'] = $this->Laporan_model->getLaporanById($id);
        //$data['id_hewan_ternak'] = $this->db->get('db_rekam_medis')->result_array();
        //$this->load->view('laporan/pdf',$data);
        $this->load->view('laporan/pdf', $data);

        $paper_size = 'A5';
    $orientation = 'portrait';
    $html = $this->output->get_output();

    $this->dompdf->set_paper($paper_size, $orientation);
    $this->dompdf->load_html($html);
    $this->dompdf->render();
    $this->dompdf->stream("laporan.pdf", array('attachment' =>0));



    
}

//ubah data 

public function ubah($id)
    {
        $data['title'] = 'Form Ubah Data Rekam Medis';
        $data['db_user'] = $this->db->get_where('db_user',['email' =>
        $this->session->userdata('email')])->row_array();
        $data['rekam_medis'] = $this->Laporan_model->getLaporanById($id);
        

       $this->form_validation->set_rules('id_hewan', 'Hewan', 'required');
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('jenis_hewan', 'jenis hewan', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'jenis kelamin', 'required');
        $this->form_validation->set_rules('umur', 'umur', 'required');
        $this->form_validation->set_rules('id_peternak', 'id_peternak', 'required');
        $this->form_validation->set_rules('daerah', 'daerah', 'required');
        $this->form_validation->set_rules('pekerjaan', 'pekerjaan', 'required');
        $this->form_validation->set_rules('alamat', 'alamat', 'required');
        $this->form_validation->set_rules('diagnosa', 'diagnosa', 'required');
        $this->form_validation->set_rules('vaksin', 'vaksin', 'required');
        $this->form_validation->set_rules('tahun', 'tahun', 'required');
        
        //$this->form_validation->set_rules('daerah', 'Daerah', 'required');
        //$this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required');
        //$this->form_validation->set_rules('alamat', 'Alamat', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('laporan/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Laporan_model->ubahDataLaporan();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('laporan');
        }
    }

    //end of ubah

//excel 

    public function excel()
    {
        //$data['medis'] = $this->Laporan_model->getAllLaporan();

        $data['medis'] = $this->Laporan_model->tampil_data('db_rekam_medis')->result();

        //$data['medis'] = $this->db->get('db_rekam_medis')->result_array();
        require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel.php');
        require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');


        $object = new PHPExcel();

        $object->getProperties()->setCreator("Mulzahrian");
        $object->getProperties()->setLastModifiedBy("Mulzahrian");
        $object->getProperties()->setTitle("Daftar Rekam Medis");

        $object->setActiveSheetIndex(0);

        $object->getActiveSheet()->setCellValue('A1','NO');
        $object->getActiveSheet()->setCellValue('B1','ID Hewan');
        $object->getActiveSheet()->setCellValue('C1','Jenis Hewan');
        $object->getActiveSheet()->setCellValue('D1','Jenis Kelamin');
        $object->getActiveSheet()->setCellValue('E1','Umur');
        $object->getActiveSheet()->setCellValue('F1','ID Peternak');
        $object->getActiveSheet()->setCellValue('G1','Nama');
        $object->getActiveSheet()->setCellValue('H1','Daerah');
        $object->getActiveSheet()->setCellValue('I1','Pekerjaan');
        $object->getActiveSheet()->setCellValue('J1','Alamat');
        $object->getActiveSheet()->setCellValue('K1','Diagnosa');
        $object->getActiveSheet()->setCellValue('L1','Vaksin');
        $object->getActiveSheet()->setCellValue('M1','Tahun');

        $baris = 2;
        $no = 1;

        foreach ($data['medis'] as $mds) {
            $object->getActiveSheet()->setCellValue('A'.$baris, $no++);
            $object->getActiveSheet()->setCellValue('B'.$baris, $mds->id_hewan);
            $object->getActiveSheet()->setCellValue('C'.$baris, $mds->jenis_hewan);
            $object->getActiveSheet()->setCellValue('D'.$baris, $mds->jenis_kelamin);
            $object->getActiveSheet()->setCellValue('E'.$baris, $mds->umur);
            $object->getActiveSheet()->setCellValue('F'.$baris, $mds->id_peternak);
            $object->getActiveSheet()->setCellValue('G'.$baris, $mds->nama);
            $object->getActiveSheet()->setCellValue('H'.$baris, $mds->daerah);
            $object->getActiveSheet()->setCellValue('I'.$baris, $mds->pekerjaan);
            $object->getActiveSheet()->setCellValue('J'.$baris, $mds->alamat);
            $object->getActiveSheet()->setCellValue('K'.$baris, $mds->diagnosa);
            $object->getActiveSheet()->setCellValue('L'.$baris, $mds->vaksin);
            $object->getActiveSheet()->setCellValue('M'.$baris, $mds->tahun);

            $baris++;
        }

    $filename="Data_Medis".'.xlsx';
    $object->getActiveSheet()->setTitle("Data Medis");
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename="'.$filename.'"');
    header('Cache-Control: max-age=0');

    $writer=PHPExcel_IOFactory::createwriter($object, 'Excel2007');
    $writer->save('php://output');
    exit;

}


//end of excel



    



}
