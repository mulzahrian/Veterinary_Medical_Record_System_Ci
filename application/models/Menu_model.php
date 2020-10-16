<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_model extends CI_Model
{
    public function getSubMenu()
    {
        $query = "SELECT `db_user_sub_menu`.*, `db_user_menu`.`menu`
                  FROM `db_user_sub_menu` JOIN `db_user_menu`
                  ON `db_user_sub_menu`.`menu_id` = `db_user_menu`.`id`
                ";
        return $this->db->query($query)->result_array();
    }
}