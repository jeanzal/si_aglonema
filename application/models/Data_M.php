<?php
class Data_M extends CI_Model{
    public function get_data_jenis()
    {
        return $data = $this->db->get('jenis_aglonema')->result_array();
    }
   
}