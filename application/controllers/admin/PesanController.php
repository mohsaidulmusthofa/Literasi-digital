<?php
defined('BASEPATH') or exit('No direct script access allowed');
class PesanController extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/PesanModel');
		cek_session();
	}

	public function index()
	{
		$data['pesan'] = $this->PesanModel->read();
		$this->load->view('admin/pesan/pesan', $data);
	}

    public function delete($id)
	{
		$delete = $this->PesanModel->delete($id);
		if ($delete) {
			$this->session->set_flashdata(
				'pesan',
				'<div class="alert alert-success alert-dismissible fade show" role="alert">
					<span class="alert-icon"><i class="ni ni-check-bold"></i></span>
					<span class="alert-text"><strong>Selamat,</strong> data berhasil dihapus !</span>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>'
			);
			redirect('admin/PesanController');
		} else {
			$this->session->set_flashdata(
				'pesan',
				'<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<span class="alert-icon"><i class="ni ni-check-bold"></i></span>
					<span class="alert-text"><strong>Maaf,</strong> data gagal dihapus !</span>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>'
			);
			redirect('admin/PesanController');
		}
	}
}
?>