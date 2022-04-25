<?php
class Obat_M extends CI_Model
{
    public function get_data_jenis_obat()
    {
        return $this->db->get('jenis_obat')->result();
    }
    public function add_data_jenis_obat($data)
    {
        return $this->db->insert('jenis_obat', $data);
    }
    public function vEditObat($where, $table)
    {
        return $this->db->get_where($table, $where)->result();
    }
    public function update_jenis_obat($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    public function hapus_jenis_obat($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function get_data_obat()
    {
        $this->db->select('data_obat.*, jenis_obat.jenis_obat');
        $this->db->from('data_obat');
        $this->db->join('jenis_obat', 'data_obat.id_jenis_obat = jenis_obat.id_jenis_obat');
        $query = $this->db->get();
        return $query->result();
    }
    public function add_data_obat($data)
    {
        return $this->db->insert('data_obat', $data);
    }
    public function vEditDataObat($where, $table)
    {
        $this->db->select('data_obat.*, jenis_obat.jenis_obat');
        $this->db->from('data_obat');
        $this->db->join('jenis_obat', 'data_obat.id_jenis_obat = jenis_obat.id_jenis_obat');
        $this->db->where($where);
        $query = $this->db->get();
        return $query->result();
    }
    public function update_data_obat($where, $data, $table)
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
