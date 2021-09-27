<?php 

class Laporan_model extends CI_model {

	public function getAllLaporan()
    {
        return $this->db->get('db_rekam_medis')->result_array();
    }

    public function tampil_data()
    {
    return $this->db->get('db_rekam_medis');
    }

    public function detail_Data($id = NULL){
    $query = $this->db->get_where('db_Rekam_medis', array('id' => $id))->row();
    return $query;
    }

    public function tampil_dataById()
    {
    return $this->db->get('db_rekam_medis', ['id' => $id]);
    }

    public function cariDataLaporan()
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

    public function hapusDataLaporan($id)
    {
        $this->db->delete('db_rekam_medis', ['id' => $id]);
    }

    public function getLaporanById($id)
    {
        return $this->db->get_where('db_rekam_medis', ['id' => $id])->row_array();
    }

    public function ubahDataLaporan()
    {
        $data = [
            "id_hewan" => $this->input->post('id_hewan', true),
            "nama" => $this->input->post('nama', true),
            "jenis_hewan" => $this->input->post('jenis_hewan', true),
            "jenis_kelamin" => $this->input->post('jenis_kelamin', true),
            "umur" => $this->input->post('umur', true),
            "id_peternak" => $this->input->post('id_peternak', true),
            "daerah" => $this->input->post('daerah', true),
            "pekerjaan" => $this->input->post('pekerjaan', true),
            "alamat" => $this->input->post('alamat', true),
            "diagnosa" => $this->input->post('diagnosa', true),
            "vaksin" => $this->input->post('vaksin', true),
            "tahun" => $this->input->post('tahun', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('db_rekam_medis', $data);
    }


}
