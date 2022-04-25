<?php
class Dashboard_M extends CI_Model
{
    public function hitungJumlahTanaman()
    {
        $query = $this->db->get('data_tanaman');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
    public function hitungJumlahGejala()
    {
        $query = $this->db->get('jenis_gejala');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
    public function hitungJumlahObat()
    {
        $query = $this->db->get('data_obat');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
}
