<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
	function hitung() {
      $sql = "SELECT nama AS hasil, COUNT(*) FROM db_user GROUP BY hasil ";
      return $this->db->query($sql);
  }

  function total_rows() {
    return $this->db->get('db_user')->num_rows();
  }

  function total_rows1() {
    return $this->db->get('db_peternak')->num_rows();
  }

  function total_rows2() {
    return $this->db->get('db_hewan')->num_rows();
  }
}
