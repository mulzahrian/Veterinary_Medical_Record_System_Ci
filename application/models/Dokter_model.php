<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Dokter_model extends CI_model {

    public function getAllPeternak()
    {
        return $this->db->get('db_peternak')->result_array();
    }

    public function hapusDataPeternak($id)
    {
        $this->db->delete('db_peternak', ['id' => $id]);
    }

    public function getPeternakById($id)
    {
        return $this->db->get_where('db_peternak', ['id' => $id])->row_array();
    }

    public function ubahDataPeternak()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "daerah" => $this->input->post('daerah', true),
            "pekerjaan" => $this->input->post('pekerjaan', true),
            "alamat" => $this->input->post('alamat', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('db_peternak', $data);
    }

    public function cariDataPeternak()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('id_peternak', $keyword);
        $this->db->or_like('nama', $keyword);
        $this->db->or_like('daerah', $keyword);
        $this->db->or_like('pekerjaan', $keyword);
        $this->db->or_like('alamat', $keyword);
        return $this->db->get('db_peternak')->result_array();
    }
    public function getAllHewan()
    {
        return $this->db->get('db_hewan')->result_array();
    }

    public function hapusDataHewan($id)
    {
        $this->db->delete('db_hewan', ['id' => $id]);
    }

    public function getHewanById($id)
    {
        return $this->db->get_where('db_hewan', ['id' => $id])->row_array();
    }

    public function ubahDataHewan()
    {
        $data = [
            "id_hewan" => $this->input->post('id_hewan', true),
            "jenis_hewan" => $this->input->post('jenis_hewan', true),
            "jenis_kelamin" => $this->input->post('jenis_kelamin', true),
            "umur" => $this->input->post('umur', true),
            "id_peternak" => $this->input->post('id_peternak', true),
            "nama" => $this->input->post('nama', true),
            "daerah" => $this->input->post('daerah', true),
            "pekerjaan" => $this->input->post('pekerjaan', true),
            "alamat" => $this->input->post('alamat', true)

        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('db_hewan', $data);
    }

    public function tambahDataMedis()
    {
        $data = [
            "id_hewan" => $this->input->post('id_hewan', true),
            "jenis_hewan" => $this->input->post('jenis_hewan', true),
            "jenis_kelamin" => $this->input->post('jenis_kelamin', true),
            "umur" => $this->input->post('umur', true),
            "id_peternak" => $this->input->post('id_peternak', true),
            "nama" => $this->input->post('nama', true),
            "daerah" => $this->input->post('daerah', true),
            "pekerjaan" => $this->input->post('pekerjaan', true),
            "alamat" => $this->input->post('alamat', true),
            "gejala" => $this->input->post('gejala', true),
            "diagnosa" => $this->input->post('diagnosa', true),
            "diagnosa1" => $this->input->post('diagnosa1', true),
            "vaksin" => $this->input->post('vaksin', true),
            "vaksin1" => $this->input->post('vaksin1', true),
            "tanggal" => $this->input->post('tanggal', true),
            "tahun" => $this->input->post('tahun', true)

        ];

        $this->db->insert('db_rekam_medis', $data);
    }

    public function get_nama($nama)
    {
        $this->db->select('*');
        $this->db->from('db_coba');
        $this->db->like('id_hewan',$nama);
        return $this->db->get()->result();


    }

    public function test($id_peternak)
  {
    
    $this->db->select('*');
    $this->db->from('db_hewan');
    $this->db->where('id_peternak');
    $this->db->where('id_peternak',$id_peternak);
    return $this->db->get()->result();
  }
  public function test2($id_peternak)
    {
        return $this->db->get_where('db_hewan', ['id_peternak' => $id_peternak])->result_array();
    }
    public function animaltest($id_hewan)
    {
        return $this->db->get_where('db_rekam_medis', ['id_hewan' => $id_hewan])->result_array();
    }
}
