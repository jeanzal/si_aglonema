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

    public function list_jenis_obat()
    {
        $data['title'] = "Data Jenis Obat";
        $data['title_dalam'] = "Jenis Obat";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['data_jenis_obat'] = $this->Obat_M->get_data_jenis_obat();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('obat/jenis_obat/list', $data);
        $this->load->view('templates/footer');
    }

    public function add_jenis_obat()
    {
        $data['title'] = "Tambah Jenis Obat";
        $data['title_dalam'] = "Tambah Jenis Obat";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('obat/jenis_obat/add', $data);
        $this->load->view('templates/footer');
    }
    public function create_jenis_obat()
    {
        $jenis_obat = $this->input->post('jenis_obat');
        $data = [
            "jenis_obat" => $jenis_obat
        ];
        if ($this->Obat_M->add_data_jenis_obat($data) == true) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Data Berhasil disimpan </div>');
            redirect('obat/list_jenis_obat');
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert"> Data tidak berhasil disimpan </div>');
            redirect('obat/add_jenis_obat');
        }
    }
    public function edit_jenis_obat($id)
    {
        $where = array('id_jenis_obat' => $id);
        $data['title'] = "Update Data Jenis Obat";
        $data['title_dalam'] = "Update Jenis Obat";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['edit_jenis_obat'] = $this->Obat_M->vEditObat($where, 'jenis_obat');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('obat/jenis_obat/edit', $data);
        $this->load->view('templates/footer');
    }
    public function update_jenis_obat()
    {
        $id = $this->input->post('id');
        $jenis_obat = $this->input->post('jenis_obat');
        $data = [
            "jenis_obat" => $jenis_obat
        ];
        $where = array('id_jenis_obat' => $id);
        if ($this->Obat_M->update_jenis_obat($where, $data, 'jenis_obat') == false) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Data Berhasil diupdate </div>');
            redirect('obat/list_jenis_obat');
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert"> Data Tidak Berhasil diupdate </div>');
            redirect('obat/list_jenis_obat');
        }
    }
    public function hapus_jenis_obat($id)
    {
        $where = array('id_jenis_obat' => $id);
        if ($this->Obat_M->hapus_jenis_obat($where, 'jenis_obat') == false) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Data Berhasil dihapus </div>');
            redirect('obat/list_jenis_obat');
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert"> Data tidak berhasil dihapus </div>');
            redirect('obat/list_jenis_obat');
        }
    }
}
