<?php 

class Medis_model extends CI_model {

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
            "no_telpon" => $this->input->post('no_telpon', true),
            "pekerjaan" => $this->input->post('pekerjaan', true),
            "alamat" => $this->input->post('alamat', true),
            "diagnosa" => $this->input->post('diagnosa', true),
            "vaksin" => $this->input->post('vaksin', true),
            "tanggal" => $this->input->post('tanggal', true),
            "tahun" => $this->input->post('tahun', true)

        ];

        $this->db->insert('db_rekam_medis', $data);
    }

    public function getAllMedis()
    {
        return $this->db->get('db_rekam_medis')->result_array();
    }




}