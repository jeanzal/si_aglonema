<?php

use LDAP\Result;

defined('BASEPATH') or exit('No direct script access allowed');

class Gejala extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
        $this->load->model('Gejala_M');
    }
    public function list_penyakit()
    {
        $data['title'] = "Data Penyakit";
        $data['title_dalam'] = "Jenis Penyakit";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['data_penyakit'] = $this->Gejala_M->get_data_jenis();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('gejala/jenis_penyakit/list', $data);
        $this->load->view('templates/footer');
    }
    public function add_penyakit()
    {
        $data['title'] = "Tambah Jenis Penyakit";
        $data['title_dalam'] = "Tambah Jenis Penyakit";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('gejala/jenis_penyakit/add', $data);
        $this->load->view('templates/footer');
    }
    public function create_penyakit()
    {
        $jenis_penyakit = $this->input->post('jenis_penyakit');
        $data = [
            "jenis_penyakit" => $jenis_penyakit
        ];
        if ($this->Gejala_M->add_data_penyakit($data) == true) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Data Berhasil disimpan </div>');
            redirect('gejala/list_penyakit');
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert"> Data tidak berhasil disimpan </div>');
            redirect('gejala/add_penyakit');
        }
    }
    public function edit_penyakit($id)
    {
        $where = array('id_penyakit' => $id);
        $data['title'] = "Update Jenis Penyakit";
        $data['title_dalam'] = "Update Jenis Penyakit";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['edit_penyakit'] = $this->Gejala_M->vEdit($where, 'jenis_penyakit');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('gejala/jenis_penyakit/edit', $data);
        $this->load->view('templates/footer');
    }
    public function update_penyakit()
    {
        $id = $this->input->post('id');
        $jenis_penyakit = $this->input->post('jenis_penyakit');
        $data = [
            "jenis_penyakit" => $jenis_penyakit
        ];
        $where = array('id_penyakit' => $id);
        if ($this->Gejala_M->update_penyakit($where, $data, 'jenis_penyakit') == false) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Data Berhasil diupdate </div>');
            redirect('gejala/list_penyakit');
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert"> Data Tidak Berhasil diupdate </div>');
            redirect('gejala/list_penyakit');
        }
    }
    public function hapus_penyakit($id)
    {
        $where = array('id_penyakit' => $id);
        if ($this->Gejala_M->hapus_penyakit($where, 'jenis_penyakit') == false) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Data Berhasil dihapus </div>');
            redirect('gejala/list_penyakit');
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert"> Data tidak berhasil dihapus </div>');
            redirect('gejala/list_penyakit');
        }
    }
}
