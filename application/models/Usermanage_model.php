<?php 

class Usermanage_model extends CI_model {
    public function getAllUser()
    {
        return $this->db->get('db_user')->result_array();
    }

    public function hapusDatauser($id)
    {
        $this->db->delete('db_user', ['id' => $id]);
    }

    public function getUserById($id)
    {
        return $this->db->get_where('db_user', ['id' => $id])->row_array();
    }

    public function ubahDataUser()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "email" => $this->input->post('email', true),
            "role_id" => $this->input->post('role_id', true),
            "is_active" => $this->input->post('is_active', true),
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('db_user', $data);
    }

    
}
