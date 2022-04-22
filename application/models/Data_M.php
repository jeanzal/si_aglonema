<?php
class Data_M extends CI_Model{
    public function get_data_jenis()
    {
        return $this->db->get('jenis_aglonema')->result();
    }
    public function add_data_jenis($data)
    {
        return $this->db->insert('jenis_aglonema', $data);
    }
    public function vEdit($where, $table)
    {
        return $this->db->get_where($table, $where)->result();
    }
    public function update_jenis($where,$data,$table){
        $this->db->where($where);
		$this->db->update($table,$data);
    }
    public function hapus_jenis($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
   
}