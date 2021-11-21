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
}
