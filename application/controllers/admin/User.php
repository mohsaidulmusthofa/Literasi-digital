<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/UserModel');
		cek_session();
	}

	public function index()
	{
		$data['user'] = $this->UserModel->read();
		$data['users'] = $this->UserModel->index();
		$this->load->view('admin/user/user', $data);
	}

	public function create()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim|max_length[100]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[tb_user.EMAIL]');
		$this->form_validation->set_rules('motto', 'Motto', 'required|trim');
		$this->form_validation->set_rules('foto', 'Foto Profile', 'trim');
		$this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
		$this->form_validation->set_rules('fb', 'Facebook', 'valid_url');
		$this->form_validation->set_rules('ig', 'Instagram', 'valid_url');
		$this->form_validation->set_rules('linkedin', 'LinkedIn', 'valid_url');

		if ($this->form_validation->run() == false) {
			$data['jabatan'] = $this->UserModel->getJabatan();
			$this->load->view('admin/user/tambah', $data);
		} else {
			$temp = explode(".", $_FILES['foto']['name']);
			$foto = round(microtime(true)) . '.' . end($temp);
			move_uploaded_file($_FILES['foto']['name'], "./uploads/user/" . $foto);
			// $foto = date('d-m-Y-H-m-s');
			$config['allowed_types'] = 'jpg|jpeg|png';
			$config['max_size']		 = '2048';
			$config['upload_path'] 	 = './uploads/user/';
			$config['file_name'] 	 = $foto;

			$this->upload->initialize($config);

			if ($this->upload->do_upload('foto')) {
				$dataPost = array(
					'ID_MEMBER'		=> '',
					'NAMA_MEMBER'	=> $this->input->post('nama'),
					'EMAIL'			=> $this->input->post('email'),
					'MOTTO'			=> $this->input->post('motto'),
					'ID_JABATAN'	=> $this->input->post('jabatan'),
					'FOTO'			=> trim($foto),
					'FACEBOOK'		=> $this->input->post('fb'),
					'IG'			=> $this->input->post('ig'),
					'LINKEDIN'		=> $this->input->post('linkedin'),
					'CREATED_AT'	=> date('Y-m-d H:i:s'),
					'UPDATED_AT'	=> date('Y-m-d H:i:s')
				);
				if ($this->UserModel->create($dataPost)) {
					$this->session->set_flashdata(
						'pesan',
						'<div class="alert alert-success alert-dismissible fade show" role="alert">
							<span class="alert-icon"><i class="ni ni-check-bold"></i></span>
							<span class="alert-text"><strong>Selamat,</strong> akun berhasil ditambahkan !</span>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>'
					);
					redirect('admin/User');
				} else {
					$this->session->set_flashdata(
						'pesan',
						'<div class="alert alert-danger alert-dismissible fade show" role="alert">
							<span class="alert-icon"><i class="ni ni-check-bold"></i></span>
							<span class="alert-text"><strong>Maaf,</strong> akun gagal ditambahkan !</span>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>'
					);
					redirect('admin/User');
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
				redirect('admin/User');
			}
		}
	}

	public function delete($id)
	{
		$delete = $this->UserModel->delete($id);
		if ($delete) {
			$this->session->set_flashdata(
				'pesan',
				'<div class="alert alert-success alert-dismissible fade show" role="alert">
					<span class="alert-icon"><i class="ni ni-check-bold"></i></span>
					<span class="alert-text"><strong>Selamat,</strong> akun berhasil dihapus !</span>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>'
			);
			redirect('admin/User');
		} else {
			$this->session->set_flashdata(
				'pesan',
				'<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<span class="alert-icon"><i class="ni ni-check-bold"></i></span>
					<span class="alert-text"><strong>Maaf,</strong> akun gagal dihapus !</span>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>'
			);
			redirect('admin/User');
		}
	}

	public function update($id = null)
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim|max_length[100]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('motto', 'Motto', 'required|trim');
		$this->form_validation->set_rules('foto', 'Foto Profile', 'trim');
		$this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
		$this->form_validation->set_rules('fb', 'Facebook', 'valid_url');
		$this->form_validation->set_rules('ig', 'Instagram', 'valid_url');
		$this->form_validation->set_rules('linkedin', 'LinkedIn', 'valid_url');

		if ($this->form_validation->run() == false) {
			$data["bagian"]	 = $this->UserModel->detail($id);
			$data["row"]	 = $this->UserModel->getJab($id);
			$data["data"]	 = $this->UserModel->getDetail($id);
			$data['user']	 = $this->db->get_where('tb_user', ['EMAIL' => $this->session->userdata('EMAIL')])->row_array();
			$this->load->view('admin/user/edit', $data);
		} else {
			$update = $this->UserModel->update(array(
				'ID_MEMBER'		=> $this->input->post('id'),
				'NAMA_MEMBER'	=> $this->input->post('nama'),
				'EMAIL'			=> $this->input->post('email'),
				'MOTTO'			=> $this->input->post('motto'),
				'ID_JABATAN'	=> $this->input->post('jabatan'),
				'FACEBOOK'		=> $this->input->post('fb'),
				'IG'			=> $this->input->post('ig'),
				'LINKEDIN'		=> $this->input->post('linkedin'),
				'CREATED_AT'	=> $this->input->post('created_at'),
				'UPDATED_AT'	=> date('Y-m-d H:i:s')
			), $id);

			if ($update) {
				$ubahfoto = $_FILES['foto']['name'];
				if ($ubahfoto) {
					$config['allowed_types'] = 'jpg|jpeg|png';
					$config['max_size']		 = '2048';
					$config['upload_path'] 	 = './uploads/user/';
					$config['file_name'] 	 = $ubahfoto;

					$this->upload->initialize($config);

					if ($this->upload->do_upload('foto')) {
						$user = $this->db->get_where('tb_team', ['ID_MEMBER' => $id])->row_array();
						$fotolama = $user['foto'];
						if ($fotolama) {
							unlink(FCPATH . './uploads/user/' . $fotolama);
						}
						$fotobaru = $this->upload->data('file_name');
						$this->db->set('FOTO', $fotobaru);
						$this->db->where('ID_MEMBER', $id);
						$this->db->update('tb_team');
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
						redirect('admin/User');
					}
				}
				$this->session->set_flashdata(
					'pesan',
					'<div class="alert alert-success alert-dismissible fade show" role="alert">
						<span class="alert-icon"><i class="ni ni-check-bold"></i></span>
						<span class="alert-text"><strong>Selamat,</strong> akun berhasil diperbaharui !</span>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>'
				);
				redirect('admin/User');
			} else {
				$this->session->set_flashdata(
					'pesan',
					'<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<span class="alert-icon"><i class="ni ni-check-bold"></i></span>
						<span class="alert-text"><strong>Maaf,</strong> akun gagal diperbaharui !</span>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>'
				);
				redirect('admin/User');
			}
		}
	}
}
