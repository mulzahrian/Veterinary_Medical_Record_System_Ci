<?php 

class Diagnosa_model extends CI_model {

	

    public function cariDataDiagnosa()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('diagnosa', $keyword);
        
        return $this->db->get('db_diagnosa')->result_array();
    }

    public function hapusDataDiagnosa($id)
    {
        // $this->db->where('id', $id);
        $this->db->delete('db_diagnosa', ['id' => $id]);
    }

    public function getDiagnosaById($id)
    {
        return $this->db->get_where('db_diagnosa', ['id' => $id])->row_array();
    }

    

    //ubah data rekam medis
    public function ubahDataDiagnosa()
    {
        $data = [
            "diagnosa" => $this->input->post('diagnosa', true),
            
            //"daerah" => $this->input->post('daerah', true),
            //"pekerjaan" => $this->input->post('pekerjaan', true),
            //"alamat" => $this->input->post('alamat', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('db_diagnosa', $data);
    }


}