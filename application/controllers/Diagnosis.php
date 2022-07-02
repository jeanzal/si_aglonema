<?php

use LDAP\Result;

defined('BASEPATH') or exit('No direct script access allowed');

class Diagnosis extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
        $this->load->model('Diagnosis_M');
        $this->load->model('Data_M');
        $this->load->model('Gejala_M');
    }

    public function list()
    {
        $data['title'] = "Diagnosis";
        $data['title_dalam'] = "Diagnosis Data";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['data_tanaman'] = $this->Data_M->get_data_tanaman();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('diagnosis/list', $data);
        $this->load->view('templates/footer');
    }

    public function list_pilih_gejala()
    {

        $pilihan = $this->input->post('pilihan');
        $where = array('id_tanaman' => $pilihan);
        $data['title'] = "Pilih Gejala";
        $data['title_dalam'] = "Pilih Gejala";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['data_gejala'] = $this->Gejala_M->get_data_gejala();
        $data['data_tanaman'] = $this->Data_M->vEditTanaman($where, 'data_tanaman');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('diagnosis/list_pilih_gejala', $data);
        $this->load->view('templates/footer');
    }
}
