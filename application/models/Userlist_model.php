<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Userlist_model extends CI_Model
{
    public function getUserList()
    {
        $query = "SELECT * FROM `user`";

        return $this->db->query($query)->result_array();
    }


    function edit_user($name, $email, $role_id, $is_active)
    {
        $hasil = $this->db->query("UPDATE `user` SET `name`='$name',role_id='$role_id',is_active='$is_active' WHERE email='$email'");
        return $hasil;
    }

    function delete_user($id)
    {
        $hasil = $this->db->query("DELETE FROM user WHERE id='$id'");
        return $hasil;
    }
}
