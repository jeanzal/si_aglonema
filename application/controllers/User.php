<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
        $this->load->model('User_M');
    }
    public function index()
    {
        $data['title'] = "Profil";
        $data['title_dalam'] = "Data Profil";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/profile', $data);
        $this->load->view('templates/footer');
    }
    public function edit_profile()
    {
        $data['title'] = "Update Profil";
        $data['title_dalam'] = "Update Profil";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/edit', $data);
        $this->load->view('templates/footer');
    }
    public function update_profile()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules(
            'email',
            'Email',
            'required|trim|valid_email|is_unique[user.email]',
            ['is_unique' => 'Email Sudah Terdaftar!']
        );
        if ($this->form_validation->run() == false) {
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'gambar' => 'default.jpg',
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()
            ];
            $id = $this->input->post('id');
            $where = array('id' => $id);
            $this->User_M->update_profile($where, $data, 'user');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> Data Berhasil diupdate </div>');
            redirect('user');
        }
    }
}
