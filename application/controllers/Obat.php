<?php

use LDAP\Result;

defined('BASEPATH') or exit('No direct script access allowed');

class Obat extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
        $this->load->model('Obat_M');
    }

    public function list_data_obat()
    {
        $data['title'] = "Data Obat";
        $data['title_dalam'] = "Data Obat";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['data_obat'] = $this->Obat_M->get_data_obat();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('obat/list', $data);
        $this->load->view('templates/footer');
    }

    public function add_obat()
    {
        $data['title'] = "Tambah Obat";
        $data['title_dalam'] = "Tambah Obat";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('obat/add', $data);
        $this->load->view('templates/footer');
    }
    public function create_obat()
    {
        $jenis_obat = $this->input->post('jenis_obat');
        $kegunaan = $this->input->post('kegunaan');
        $data = [
            "jenis_obat" => $jenis_obat,
            "kegunaan" => $kegunaan
        ];
        if ($this->Obat_M->add_data_obat($data) == true) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Data Berhasil disimpan </div>');
            redirect('obat/list_data_obat');
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert"> Data tidak berhasil disimpan </div>');
            redirect('obat/add_obat');
        }
    }
    public function edit_obat($id)
    {
        $where = array('id_obat' => $id);
        $data['title'] = "Update Data Obat";
        $data['title_dalam'] = "Update Obat";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['edit_obat'] = $this->Obat_M->vEditObat($where, 'data_obat');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('obat/edit', $data);
        $this->load->view('templates/footer');
    }
    public function update_obat()
    {
        $id = $this->input->post('id');
        $jenis_obat = $this->input->post('jenis_obat');
        $kegunaan = $this->input->post('kegunaan');
        $data = [
            "jenis_obat" => $jenis_obat,
            "kegunaan" => $kegunaan
        ];
        $where = array('id_obat' => $id);
        if ($this->Obat_M->update_obat($where, $data, 'data_obat') == false) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Data Berhasil diupdate </div>');
            redirect('obat/list_data_obat');
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert"> Data Tidak Berhasil diupdate </div>');
            redirect('obat/list_data_obat');
        }
    }
    public function hapus_obat($id)
    {
        $where = array('id_obat' => $id);
        if ($this->Obat_M->hapus_obat($where, 'data_obat') == false) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Data Berhasil dihapus </div>');
            redirect('obat/list_data_obat');
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert"> Data tidak berhasil dihapus </div>');
            redirect('obat/list_data_obat');
        }
    }
}
