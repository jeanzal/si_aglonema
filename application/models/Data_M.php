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

    public function get_data_tanaman()
    {
        $this->db->select('data_tanaman.*, jenis_aglonema.jenis_aglonema'); 
  		$this->db->from('data_tanaman'); 
  		$this->db->join('jenis_aglonema', 'data_tanaman.id_jenis = jenis_aglonema.id_jenis'); 
  		$query = $this->db->get();
		return $query->result();
    }
    public function add_data_tanaman($data)
    {
        return $this->db->insert('data_tanaman', $data);
    }
    public function vEditTanaman($where, $table)
    {
        $this->db->select('data_tanaman.*, jenis_aglonema.jenis_aglonema'); 
  		$this->db->from($table); 
  		$this->db->join('jenis_aglonema', 'data_tanaman.id_jenis = jenis_aglonema.id_jenis'); 
  		$this->db->where($where); 
  		$query = $this->db->get();
		return $query->result();
    }
    public function update_tanaman($where,$data,$table){
        $this->db->where($where);
		$this->db->update($table,$data);
    }
   
}