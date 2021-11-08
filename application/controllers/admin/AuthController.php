<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AuthController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
        if ($this->form_validation->run() == false) {
            $this->load->view('admin/login');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $email      = $this->input->post('email');
        $password   = $this->input->post('password');
        $user       = $this->db->get_where('tb_user', ['EMAIL' => $email])->row_array();

        if ($user) {
            if (password_verify($password, $user['PASSWORD'])) {
                $data = [
                    'NAMA'      => $user['NAMA'],
                    'EMAIL'     => $user['EMAIL'],
                    'FOTO'      => $user['FOTO'],
                    'USERNAME'  => $user['USERNAME']
                ];
                $this->session->set_userdata($data);
                $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Selamat datang, <strong>' . $this->session->userdata('USERNAME') . '!</strong></div>');
                redirect('admin/DashboardController');
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Password salah!</div>');
                redirect('admin/AuthController');
            }
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Akun tidak terdaftar!</div>');
            redirect('admin/AuthController');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('NAMA');
        $this->session->unset_userdata('EMAIL');
        $this->session->unset_userdata('FOTO');
        $this->session->unset_userdata('USERNAME');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Anda berhasil Logout!</div>');
        redirect('admin/AuthController');
    }
}
