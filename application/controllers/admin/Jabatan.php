<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jabatan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/JabatanModel');
		cek_session();
	}

	public function index()
	{
		$data['jabatan'] = $this->JabatanModel->read();
		$this->load->view('admin/jabatan/jabatan', $data);
	}

	public function create()
	{
		$this->form_validation->set_rules('jabatan', 'Jabatan', 'required|trim|max_length[100]');

		if ($this->form_validation->run() == false) {
			$this->load->view('admin/jabatan/tambah');
		} else {
			$dataPost = array(
				'ID_JABATAN'	=> '',
				'JABATAN'		=> $this->input->post('jabatan'),
				'CREATED_AT'	=> date('Y-m-d H:i:s'),
				'UPDATED_AT'	=> date('Y-m-d H:i:s')
			);
			if ($this->JabatanModel->create($dataPost)) {
				$this->session->set_flashdata(
					'pesan',
					'<div class="alert alert-success alert-dismissible fade show" role="alert">
							<span class="alert-icon"><i class="ni ni-check-bold"></i></span>
							<span class="alert-text"><strong>Selamat,</strong> data berhasil ditambahkan !</span>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>'
				);
				redirect('admin/Jabatan');
			} else {
				$this->session->set_flashdata(
					'pesan',
					'<div class="alert alert-danger alert-dismissible fade show" role="alert">
							<span class="alert-icon"><i class="ni ni-check-bold"></i></span>
							<span class="alert-text"><strong>Maaf,</strong> data gagal ditambahkan !</span>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>'
				);
				redirect('admin/Jabatan');
			}
		}
	}

	public function delete($id)
	{
		$delete = $this->JabatanModel->delete($id);
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
			redirect('admin/Jabatan');
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
			redirect('admin/Jabatan');
		}
	}

	public function update($id = null)
	{
		$this->form_validation->set_rules('jabatan', 'Jabatan', 'required|trim|max_length[100]');

		if ($this->form_validation->run() == false) {
			$data["jabatan"]	 = $this->JabatanModel->detail($id);
			$this->load->view('admin/jabatan/edit', $data);
		} else {
			if ($this->input->method() == "post") {
				$update = $this->JabatanModel->update(array(
					'ID_JABATAN'		=> $this->input->post('id'),
					'JABATAN'			=> $this->input->post('jabatan'),
					'CREATED_AT'		=> $this->input->post('created_at'),
					'UPDATED_AT'		=> date('Y-m-d H:i:s')
				), $id);
				if ($update) {
					$this->session->set_flashdata(
						'pesan',
						'<div class="alert alert-success alert-dismissible fade show" role="alert">
						<span class="alert-icon"><i class="ni ni-check-bold"></i></span>
						<span class="alert-text"><strong>Selamat,</strong> data berhasil diperbaharui !</span>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>'
					);
					redirect('admin/Jabatan');
				} else {
					$this->session->set_flashdata(
						'pesan',
						'<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<span class="alert-icon"><i class="ni ni-check-bold"></i></span>
						<span class="alert-text"><strong>Maaf,</strong> data gagal diperbaharui !</span>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>'
					);
					redirect('admin/Jabatan');
				}
			}
		}
	}
}
