<?php

use LDAP\Result;

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
    public function add_jenis()
    {
        $data['title'] = "Tambah Jenis Aglonema";
        $data['title_dalam'] = "Tambah Jenis Algonema";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('data/jenis_aglonema/add', $data);
        $this->load->view('templates/footer');
    }
    public function create_jenis()
    {
        $jenis_aglonema = $this->input->post('jenis_aglonema');
        $data = [
            "jenis_aglonema" => $jenis_aglonema
        ];
        if($this->Data_M->add_data_jenis($data) == true){
            $this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert"> Data Berhasil disimpan </div>');
            redirect('data/list_jenis');
        }else{
            $this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert"> Data tidak berhasil disimpan </div>');
            redirect('data/add_jenis');
        }
    }
    public function edit_jenis($id)
    {
        $where = array('id' => $id);
        $data['title'] = "Update Jenis Aglonema";        
        $data['title_dalam'] = "Update Jenis Algonema";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['edit_jenis'] = $this->Data_M->vEdit($where, 'jenis_aglonema');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('data/jenis_aglonema/edit', $data);
        $this->load->view('templates/footer');
    }
    public function update_jenis()
    {
        $id = $this->input->post('id');
        $jenis_aglonema = $this->input->post('jenis_aglonema');
        $data = [
            "jenis_aglonema" => $jenis_aglonema
        ];
        $where = array('id'=>$id);
        if($this->Data_M->update_jenis($where,$data,'jenis_aglonema') == false){
            $this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert"> Data Berhasil diupdate </div>');
            redirect('data/list_jenis');
        }else{
            $this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert"> Data Tidak Berhasil diupdate </div>');
            redirect('data/list_jenis');
        }
    }
    public function hapus_jenis($id)
    {
        $where = array('id' => $id);
        if($this->Data_M->hapus_jenis($where, 'jenis_aglonema') == false){
            $this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert"> Data Berhasil dihapus </div>');
            redirect('data/list_jenis');
        }else{
            $this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert"> Data tidak berhasil dihapus </div>');
            redirect('data/list_jenis');
        }
    }
}