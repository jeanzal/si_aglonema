<?php
class Gejala_M extends CI_Model
{
    public function get_data_jenis()
    {
        return $this->db->get('jenis_penyakit')->result();
    }
    public function add_data_penyakit($data)
    {
        return $this->db->insert('jenis_penyakit', $data);
    }
    public function vEdit($where, $table)
    {
        return $this->db->get_where($table, $where)->result();
    }
    public function update_penyakit($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    public function hapus_penyakit($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
