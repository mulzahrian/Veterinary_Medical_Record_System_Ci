<?php 

class Vaksin_model extends CI_model {

	

    public function cariDataVaksin()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('vaksin', $keyword);
        
        return $this->db->get('db_vaksin')->result_array();
    }

    public function hapusDataVaksin($id)
    {
        $this->db->delete('db_vaksin', ['id' => $id]);
    }

    public function getVaksinById($id)
    {
        return $this->db->get_where('db_vaksin', ['id' => $id])->row_array();
    }

    public function ubahDataVaksin()
    {
        $data = [
            "vaksin" => $this->input->post('vaksin', true),
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('db_vaksin', $data);
    }


}
