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

    public function get_data_gejala()
    {
        $this->db->select('jenis_gejala.*, jenis_penyakit.jenis_penyakit');
        $this->db->from('jenis_gejala');
        $this->db->join('jenis_penyakit', 'jenis_gejala.id_penyakit = jenis_penyakit.id_penyakit');
        $query = $this->db->get();
        return $query->result();
    }
    public function add_jenis_gejala($data)
    {
        return $this->db->insert('jenis_gejala', $data);
    }
    public function vEditGejala($where, $table)
    {
        $this->db->select('jenis_gejala.*, jenis_penyakit.jenis_penyakit');
        $this->db->from('jenis_gejala');
        $this->db->join('jenis_penyakit', 'jenis_gejala.id_penyakit = jenis_penyakit.id_penyakit');
        $this->db->where($where);
        $query = $this->db->get();
        return $query->result();
    }
    public function update_data_gejala($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    public function hapus_gejala($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
