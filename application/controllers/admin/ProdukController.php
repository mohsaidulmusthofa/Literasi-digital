<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ProdukController extends CI_Controller {

    public function __construct() {
        parent::__construct();
		$this->load->model('admin/ProdukModel');
		cek_session();
    }

    public function index()
	{
		$data['produk'] = $this->ProdukModel->read();
		$this->load->view('admin/produk/produk', $data);
	}

	public function create()
	{
		$this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required|trim|max_length[100]');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi Produk', 'required|trim');
		$this->form_validation->set_rules('foto', 'Foto Produk', 'trim');

		if ($this->form_validation->run() == false) {
			$this->load->view('admin/produk/tambah');
		} else {
			$temp = explode(".", $_FILES['foto']['name']);
			$foto = round(microtime(true)) . '.' . end($temp);
			move_uploaded_file($_FILES['foto']['name'], "./uploads/produk/" . $foto);
			// $foto = date('d-m-Y-H-m-s');
			$config['allowed_types'] = 'jpg|jpeg|png';
			$config['max_size']		 = '2048';
			$config['upload_path'] 	 = './uploads/produk/';
			$config['file_name'] 	 = $foto;

			$this->upload->initialize($config);

			if ($this->upload->do_upload('foto')) {
				$dataPost = array(
					'ID_PRODUK'			=> '',
					'NAMA_PRODUK'		=> $this->input->post('nama_produk'),
					'DESKRIPSI'			=> $this->input->post('deskripsi'),
					'FOTO'				=> trim($foto),
					'CREATED_AT'		=> date('Y-m-d h-m-s'),
					'UPDATED_AT'		=> date('Y-m-d h-m-s')
				);
				if ($this->ProdukModel->create($dataPost)) {
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
					redirect('admin/ProdukController');
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
					redirect('admin/ProdukController');
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
				redirect('admin/ProdukController');
			}
		}
	}

	public function delete($id)
	{
		$delete = $this->ProdukModel->delete($id);
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
			redirect('admin/ProdukController');
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
			redirect('admin/ProdukController');
		}
	}

	public function update($id = null)
	{
		$this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required|trim|max_length[100]');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi Produk', 'required|trim');
		$this->form_validation->set_rules('foto', 'Foto Produk', 'trim');

		if ($this->form_validation->run() == false) {
			$data["produk"]	 = $this->ProdukModel->detail($id);
			$this->load->view('admin/produk/edit', $data);
		} else {
			$update = $this->ProdukModel->update(array(
				'ID_PRODUK'			=> '',
				'NAMA_PRODUK'		=> $this->input->post('nama_produk'),
				'DESKRIPSI'			=> $this->input->post('deskripsi'),
				'CREATED_AT'		=> date('Y-m-d h-m-s'),
				'UPDATED_AT'		=> date('Y-m-d h-m-s')
			), $id);
			if ($update) {
				$ubahfoto = $_FILES['foto']['name'];
				if ($ubahfoto) {
					$config['allowed_types'] = 'jpg|jpeg|png';
					$config['max_size']		 = '2048';
					$config['upload_path'] 	 = './uploads/produk/';
					$config['file_name'] 	 = $ubahfoto;

					$this->upload->initialize($config);

					if ($this->upload->do_upload('foto')) {
						$user = $this->db->get_where('tb_produk', ['ID_PRODUK' => $id])->row_array();
						$fotolama = $user['foto'];
						if ($fotolama) {
							unlink(FCPATH . './uploads/produk/' . $fotolama);
						}
						$fotobaru = $this->upload->data('file_name');
						$this->db->set('FOTO', $fotobaru);
						$this->db->where('ID_PRODUK', $id);
						$this->db->update('tb_produk');
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
						redirect('admin/ProdukController');
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
				redirect('admin/ProdukController');
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
				redirect('admin/ProdukController');
			}
		}
	}
}
?>