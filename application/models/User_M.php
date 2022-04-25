<?php
class User_M extends CI_Model
{
    public function viewEditProfile($where, $table)
    {
        return $this->db->get_where($table, $where)->result();
    }
    public function update_profile($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
