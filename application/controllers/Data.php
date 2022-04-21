<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('email')){
            redirect('auth');
        }
        $this->load->model('Data_M');
    }

    public function list_jenis()
    {
        $data['title'] = "Data Aglonema";
        $data['title_dalam'] = "Jenis Aglonema";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['data_jenis'] = $this->Data_M->get_data_jenis();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('data/jenis_aglonema/list', $data);
        $this->load->view('templates/footer');
    }
    public function list_tanaman()
    {
        $data['title'] = "Data Aglonema";
        $data['title_dalam'] = "Data Aglonema";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('data/data_tanaman/list', $data);
        $this->load->view('templates/footer');
    }
}