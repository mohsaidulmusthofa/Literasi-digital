<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Pesan extends CI_Controller {

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

	public function create()
	{
		$this->form_validation->set_rules('name', 'Nama', 'required|trim|max_length[100]');
		$this->form_validation->set_rules('telepon', 'Telepon', 'required|trim|min_length[12]|max_length[13]');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('message', 'Pesan', 'required|trim|max_length[300]');

		if ($this->form_validation->run() == false) {
			$this->load->view('user/getintouch');
		} else {
			$dataPost = array(
				'ID_PESAN'			=> '',
				'NAMA_PENGIRIM'		=> $this->input->post('name'),
				'EMAIL_PENGIRIM'	=> $this->input->post('email'),
				'TELEPHONE'			=> $this->input->post('telepon'),
				'PESAN'				=> $this->input->post('message'),
				'CREATED_AT'		=> date('Y-m-d H:i:s'),
				'UPDATED_AT'		=> date('Y-m-d H:i:s')
			);
			if ($this->PesanModel->create($dataPost)) {
				$this->session->set_flashdata(
					'pesan',
					'<div class="alert alert-success alert-dismissible fade show col-sm-12" role="alert">
							<span class="alert-icon"><i class="ni ni-check-bold"></i></span>
							<span class="alert-text"><strong>Selamat,</strong> pesan berhasil dikirim !</span>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>'
				);
				redirect('Pages#contact');
			} else {
				$this->session->set_flashdata(
					'pesan',
					'<div class="alert alert-danger alert-dismissible fade show col-sm-12" role="alert">
							<span class="alert-icon"><i class="ni ni-check-bold"></i></span>
							<span class="alert-text"><strong>Maaf,</strong> pesan gagal dikirim !</span>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>'
				);
				redirect('Pages#contact');
			}
		}
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
			redirect('admin/Pesan');
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
			redirect('admin/Pesan');
		}
	}
}
