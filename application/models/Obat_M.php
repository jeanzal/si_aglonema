<?php
class Obat_M extends CI_Model
{
    public function get_data_obat()
    {
        return $this->db->get('data_obat')->result();
    }
    public function add_data_obat($data)
    {
        return $this->db->insert('data_obat', $data);
    }
    public function vEditObat($where, $table)
    {
        return $this->db->get_where($table, $where)->result();
    }
    public function update_obat($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    public function hapus_obat($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
