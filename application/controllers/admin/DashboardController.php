<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DashboardController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/DashboardModel');
        cek_session();
    }

    public function index()
    {
        $data['produk']     = $this->DashboardModel->count_product();
        $data['pesan']      = $this->DashboardModel->count_message();
        $data['ourmission'] = $this->DashboardModel->count_ourmission();
        $data['user']       = $this->DashboardModel->count_members();
        $this->load->view('admin/dashboard', $data);
    }
}
