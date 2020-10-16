<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Report_model extends CI_Model
{

public function getLaporanById($id)
    {
        return $this->db->get_where('db_rekam_medis', ['id' => $id])->row_array();
    }
//cari 

    public function cariDataReport()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('id_hewan', $keyword);
        $this->db->or_like('jenis_hewan', $keyword);
        $this->db->or_like('jenis_kelamin', $keyword);
        $this->db->or_like('umur', $keyword);
        $this->db->or_like('id_peternak', $keyword);
        $this->db->or_like('nama', $keyword);
        $this->db->or_like('daerah', $keyword);
        $this->db->or_like('pekerjaan', $keyword);
        $this->db->or_like('alamat', $keyword);
        $this->db->or_like('diagnosa', $keyword);
        $this->db->or_like('vaksin', $keyword);
        $this->db->or_like('tanggal', $keyword);
        $this->db->or_like('tahun', $keyword);
        return $this->db->get('db_rekam_medis')->result_array();
    }

//end of cari
	

  //satu 

    public function getSatu()
    {
        $query = "SELECT * FROM db_rekam_medis WHERE tahun = '2019' ";
        return $this->db->query($query)->result_array();
    }

    //end of satu


    //dua 

    public function getDua()
    {
        $query = "SELECT * FROM db_rekam_medis WHERE tahun = '2018' ";
        return $this->db->query($query)->result_array();
    }

    //end of dua

    //tiga 

    public function getTiga()
    {
        $query = "SELECT * FROM db_rekam_medis WHERE tahun = '2017' ";
        return $this->db->query($query)->result_array();
    }

    //end of tiga

}