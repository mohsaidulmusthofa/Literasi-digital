<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
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
        $user       = $this->db->get_where('tb_auth', ['EMAIL' => $email])->row_array();

        if ($user) {
            if (password_verify($password, $user['PASSWORD'])) {
                $data = [
                    'NAMA'      => $user['NAMA'],
                    'EMAIL'     => $user['EMAIL'],
                ];
                $this->session->set_userdata($data);
                $this->session->set_flashdata(
                    'pesan',
                    '<div class="alert alert-success alert-dismissible fade show" role="alert">
						<span class="alert-icon"><i class="ni ni-check-bold"></i></span>
						<span class="alert-text"><strong>Selamat datang, </strong>' . $this->session->userdata('NAMA') . ' !</span>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>'
                );
                redirect('admin/Dashboard');
            } else {
                $this->session->set_flashdata(
                    'pesan',
                    '<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<span class="alert-icon"><i class="ni ni-check-bold"></i></span>
						<span class="alert-text"><strong>Login gagal, </strong>harap cek kembali password anda !</span>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>'
                );
                redirect('admin/Auth');
            }
        } else {
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <span class="alert-icon"><i class="ni ni-check-bold"></i></span>
                    <span class="alert-text"><strong>Mohon maaf, </strong>anda tidak memiliki akses !</span>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );
            redirect('admin/Auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('NAMA');
        $this->session->unset_userdata('EMAIL');
        $this->session->set_flashdata(
            'pesan',
            '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <span class="alert-icon"><i class="ni ni-check-bold"></i></span>
                <span class="alert-text"><strong>Selamat, </strong>anda berhasil logout. Harap login untuk melanjutkan !</span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>'
        );
        redirect('admin/Auth');
    }
}
