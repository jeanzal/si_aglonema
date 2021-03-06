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
        $this->load->model('Obat_M');
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

    public function list_gejala()
    {
        $data['title'] = "Data Gejala";
        $data['title_dalam'] = "Jenis Gejala";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['data_gejala'] = $this->Gejala_M->get_data_gejala();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('gejala/jenis_gejala/list', $data);
        $this->load->view('templates/footer');
    }

    public function add_gejala()
    {
        $data['title'] = "Tambah Jenis Gejala";
        $data['title_dalam'] = "Tambah Jenis Gejala";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['data_penyakit'] = $this->Gejala_M->get_data_jenis();
        $data['data_obat'] = $this->Obat_M->get_data_obat();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('gejala/jenis_gejala/add', $data);
        $this->load->view('templates/footer');
    }

    public function create_gejala()
    {
        $id_penyakit = $this->input->post('id_penyakit');
        $id_obat = $this->input->post('id_obat');
        $karakteristik_gejala = $this->input->post('karakteristik_gejala');
        $data = [
            "id_penyakit" => $id_penyakit,
            "id_obat" => $id_obat,
            "karakteristik_gejala" => $karakteristik_gejala,
        ];
        if ($this->Gejala_M->add_jenis_gejala($data) == true) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Data Berhasil disimpan </div>');
            redirect('gejala/list_gejala');
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert"> Data tidak berhasil disimpan </div>');
            redirect('gejala/add_gejala');
        }
    }
    public function edit_gejala($id)
    {
        $where = array('id_gejala' => $id);
        $data['title'] = "Update Data Gejala";
        $data['title_dalam'] = "Update Jenis Gejala";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['edit_gejala'] = $this->Gejala_M->vEditGejala($where, 'jenis_gejala');
        $data['data_penyakit'] = $this->Gejala_M->get_data_jenis();
        $data['data_obat'] = $this->Obat_M->get_data_obat();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('gejala/jenis_gejala/edit', $data);
        $this->load->view('templates/footer');
    }
    public function update_gejala()
    {
        $id_gejala = $this->input->post('id');
        $id_penyakit = $this->input->post('id_penyakit');
        $id_obat = $this->input->post('id_obat');
        $karakteristik_gejala = $this->input->post('karakteristik_gejala');
        $data = [
            "id_penyakit" => $id_penyakit,
            "id_obat" => $id_obat,
            "karakteristik_gejala" => $karakteristik_gejala
        ];
        $where = array('id_gejala' => $id_gejala);
        if ($this->Gejala_M->update_data_gejala($where, $data, 'jenis_gejala') == false) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Data Berhasil diupdate </div>');
            redirect('gejala/list_gejala');
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert"> Data Tidak Berhasil diupdate </div>');
            redirect('gejala/list_gejala');
        }
    }
    public function hapus_gejala($id)
    {
        $where = array('id_gejala' => $id);
        if ($this->Gejala_M->hapus_gejala($where, 'jenis_gejala') == false) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Data Berhasil dihapus </div>');
            redirect('gejala/list_gejala');
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert"> Data tidak berhasil dihapus </div>');
            redirect('gejala/list_gejala');
        }
    }
}
