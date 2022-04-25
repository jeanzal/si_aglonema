<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
        $this->load->model('Dashboard_M');
    }

    public function index()
    {
        $data['title'] = "Dashboard";
        $data['title_dalam'] = "Dashboard";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['data_aglonema'] = $this->Dashboard_M->hitungJumlahTanaman();
        $data['data_gejala'] = $this->Dashboard_M->hitungJumlahGejala();
        $data['data_obat'] = $this->Dashboard_M->hitungJumlahObat();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('dashboard', $data);
        $this->load->view('templates/footer');
    }
}
