<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PerusahaanController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/PerusahaanModel');
	}

	public function index()
	{
		$data['bisnis'] = $this->PerusahaanModel->read();
		$this->load->view('admin/perusahaan/perusahaan', $data);
	}

	public function create()
	{
		$this->form_validation->set_rules('nama_bisnis', 'Nama perusahaan', 'required|trim|max_length[100]');
		$this->form_validation->set_rules('slogan', 'Slogan', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[tb_bisnis.EMAIL]');
		$this->form_validation->set_rules('no_telpon', 'Contact person', 'required|numeric|min_length[11]|max_length[13]');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi perusahaan', 'required|trim');
		$this->form_validation->set_rules('foto', 'Foto Profile', 'trim');
		$this->form_validation->set_rules('fb', 'Facebook', 'required|valid_url');
		$this->form_validation->set_rules('ig', 'Instagram', 'required|valid_url');

		if ($this->form_validation->run() == false) {
			$this->load->view('admin/perusahaan/tambah');
		} else {
			$temp = explode(".", $_FILES['foto']['name']);
			$foto = round(microtime(true)) . '.' . end($temp);
			move_uploaded_file($_FILES['foto']['name'], "./uploads/perusahaan/" . $foto);
			// $foto = date('d-m-Y-H-m-s');
			$config['allowed_types'] = 'jpg|jpeg|png';
			$config['max_size']		 = '2048';
			$config['upload_path'] 	 = './uploads/perusahaan/';
			$config['file_name'] 	 = $foto;

			$this->upload->initialize($config);

			if ($this->upload->do_upload('foto')) {
				$dataPost = array(
					'ID_BISNIS'			=> '',
					'NAMA_BISNIS'		=> $this->input->post('nama_bisnis'),
					'SLOGAN'			=> $this->input->post('slogan'),
					'EMAIL'				=> $this->input->post('email'),
					'CONTACT_PERSON'	=> $this->input->post('no_telpon'),
					'ALAMAT'			=> $this->input->post('alamat'),
					'ABOUT_US'			=> $this->input->post('deskripsi'),
					'FOTO'				=> trim($foto),
					'FB'				=> $this->input->post('fb'),
					'IG'				=> $this->input->post('ig'),
					'CREATED_AT'		=> date('Y-m-d h-m-s'),
					'UPDATED_AT'		=> date('Y-m-d h-m-s')
				);
				if ($this->PerusahaanModel->create($dataPost)) {
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
					redirect('admin/PerusahaanController');
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
					redirect('admin/PerusahaanController');
				}
			} else {
				$this->session->set_flashdata(
					'pesan',
					'<div class="alert alert-danger alert-dismissible fade show" role="alert">'
						. $this->upload->display_errors() .
						'<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>'
				);
				redirect('admin/PerusahaanController');
			}
		}
	}

	public function delete($id)
	{
		$delete = $this->PerusahaanModel->delete($id);
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
			redirect('admin/PerusahaanController');
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
			redirect('admin/PerusahaanController');
		}
	}

	public function update($id = null)
	{
		$this->form_validation->set_rules('nama_bisnis', 'Nama perusahaan', 'required|trim|max_length[100]');
		$this->form_validation->set_rules('slogan', 'Slogan', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('no_telpon', 'Contact person', 'required|numeric|min_length[11]|max_length[13]');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi perusahaan', 'required|trim');
		$this->form_validation->set_rules('foto', 'Foto Profile', 'trim');
		$this->form_validation->set_rules('fb', 'Facebook', 'required|valid_url');
		$this->form_validation->set_rules('ig', 'Instagram', 'required|valid_url');

		if ($this->form_validation->run() == false) {
			$data["bisnis"]	 = $this->PerusahaanModel->detail($id);
			$data['user']	 = $this->db->get_where('tb_bisnis', ['EMAIL' => $this->session->userdata('EMAIL')])->row_array();
			$this->load->view('admin/perusahaan/edit', $data);
		} else {
			$update = $this->PerusahaanModel->update(array(
				'ID_BISNIS'			=> $this->input->post('id'),
				'NAMA_BISNIS'		=> $this->input->post('nama_bisnis'),
				'SLOGAN'			=> $this->input->post('slogan'),
				'EMAIL'				=> $this->input->post('email'),
				'CONTACT_PERSON'	=> $this->input->post('no_telpon'),
				'ALAMAT'			=> $this->input->post('alamat'),
				'ABOUT_US'			=> $this->input->post('deskripsi'),
				'FB'				=> $this->input->post('fb'),
				'IG'				=> $this->input->post('ig'),
				'CREATED_AT'		=> $this->input->post('created_at'),
				'UPDATED_AT'		=> date('Y-m-d h-m-s')
			), $id);

			if ($update) {
				$ubahfoto = $_FILES['foto']['name'];
				if ($ubahfoto) {
					$config['allowed_types'] = 'jpg|jpeg|png';
					$config['max_size']		 = '2048';
					$config['upload_path'] 	 = './uploads/perusahaan/';
					$config['file_name'] 	 = $ubahfoto;

					$this->upload->initialize($config);

					if ($this->upload->do_upload('foto')) {
						$user = $this->db->get_where('tb_bisnis', ['ID_BISNIS' => $id])->row_array();
						$fotolama = $user['foto'];
						if ($fotolama) {
							unlink(FCPATH . './uploads/perusahaan/' . $fotolama);
						}
						$fotobaru = $this->upload->data('file_name');
						$this->db->set('FOTO', $fotobaru);
						$this->db->where('ID_BISNIS', $id);
						$this->db->update('tb_bisnis');
					} else {
						$this->session->set_flashdata(
							'pesan',
							'<div class="alert alert-danger alert-dismissible fade show" role="alert">
								<span class="alert-icon"><i class="ni ni-check-bold"></i></span>
								' . $this->upload->display_errors() . '
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>'
						);
						redirect('admin/PerusahaanController');
					}
				}
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
				redirect('admin/PerusahaanController');
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
				redirect('admin/PerusahaanController');
			}
		}
	}
}
