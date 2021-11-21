<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pages extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/UserModel');
		$this->load->model('admin/ProdukModel');
		$this->load->model('admin/PerusahaanModel');
		$this->load->model('admin/CounterModel');
		$this->load->model('admin/TeamsModel');
		$this->load->model('admin/JabatanModel');
		$this->load->model('admin/PesanModel');
		$this->load->model('admin/OurMissionModel');
	}

	public function index()
	{
		$data['teams'] = $this->UserModel->read();
		$data['produk'] = $this->ProdukModel->read();
		$data['perusahaan'] = $this->PerusahaanModel->read();
		$data['counter'] = $this->CounterModel->read();
		$data['teams'] = $this->TeamsModel->read();
		$data['jabatan'] = $this->JabatanModel->team();
		$data['ourmission'] = $this->OurMissionModel->read();
		$this->load->view('user/index', $data);
		// var_dump($data);
	}

	public function product_details($id)
	{
		$data['detailproduk'] = $this->ProdukModel->getProduk($id);
		$this->load->view('user/detailproduk', $data);
		// var_dump($data);
	}

	// public function create()
	// {
	// 	$this->form_validation->set_rules('name', 'name', 'required|trim|max_length[100]');
	// 	$this->form_validation->set_rules('telepon', 'telepon', 'required|trim|max_length[100]');
	// 	$this->form_validation->set_rules('email', 'email', 'required|trim|max_length[100]');
	// 	$this->form_validation->set_rules('message', 'message', 'required|trim|max_length[100]');

	// 	if ($this->form_validation->run() == false) {
	// 		$this->load->view('user/getintouch');
	// 	} else {
	// 		$dataPost = array(
	// 			'ID_PESAN'	=> '',
	// 			'NAMA_PENGIRIM'		=> $this->input->post('name'),
	// 			'EMAIL_PENGIRIM'		=> $this->input->post('email'),
	// 			'TELEPHONE'		=> $this->input->post('telepon'),
	// 			'PESAN'		=> $this->input->post('pesan'),
	// 			'CREATED_AT'	=> date('Y-m-d H:i:s'),
	// 			'UPDATED_AT'	=> date('Y-m-d H:i:s')
	// 		);
	// 		if ($this->PesanModel->create($dataPost)) {
	// 			$this->session->set_flashdata(
	// 				'pesan',
	// 				'<div class="alert alert-success alert-dismissible fade show" role="alert">
	// 						<span class="alert-icon"><i class="ni ni-check-bold"></i></span>
	// 						<span class="alert-text"><strong>Selamat,</strong> data berhasil ditambahkan !</span>
	// 						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	// 							<span aria-hidden="true">&times;</span>
	// 						</button>
	// 					</div>'
	// 			);
	// 			redirect('Pages');
	// 		} else {
	// 			$this->session->set_flashdata(
	// 				'pesan',
	// 				'<div class="alert alert-danger alert-dismissible fade show" role="alert">
	// 						<span class="alert-icon"><i class="ni ni-check-bold"></i></span>
	// 						<span class="alert-text"><strong>Maaf,</strong> data gagal ditambahkan !</span>
	// 						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	// 							<span aria-hidden="true">&times;</span>
	// 						</button>
	// 					</div>'
	// 			);
	// 			redirect('Pages');
	// 		}
	// 	}
	// }
}
