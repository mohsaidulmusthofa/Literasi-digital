<?php
defined('BASEPATH') or exit('No direct script access allowed');

class OurMission extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
		$this->load->model('admin/OurMissionModel');
		cek_session();
    }

    /* Menampilkan Data */
    public function index(){
        $data['mission'] = $this->OurMissionModel->read();
        $this->load->view('admin/ourmission/ourmission', $data);
    }

    /* Tambah Data */
    public function create(){
        $this->form_validation->set_rules('description', 'Deskripsi Our Mission', 'required|trim');
		$this->form_validation->set_rules('foto', 'Foto Our Mission', 'trim');


		if ($this->form_validation->run() == false) {
			$this->load->view('admin/ourmission/tambah');
		} else {
			$temp = explode(".", $_FILES['foto']['name']);
			$foto = round(microtime(true)) . '.' . end($temp);
			move_uploaded_file($_FILES['foto']['name'], "./uploads/ourmission/" . $foto);
			// $foto = date('d-m-Y-H-m-s');
			$config['allowed_types'] = 'jpg|jpeg|png';
			$config['max_size']		 = '2048';
			$config['upload_path'] 	 = './uploads/ourmission/';
			$config['file_name'] 	 = $foto;

			$this->upload->initialize($config);

			if ($this->upload->do_upload('foto')) {
				$dataPost = array(
					'ID_OURMISSION'		=> '',
					'FOTO'				=> trim($foto),
					'DESCRIPTION'		=> $this->input->post('description'),
					'CREATED_AT'		=> date('Y-m-d h-m-s'),
					'UPDATED_AT'		=> date('Y-m-d h-m-s')
				);
				if ($this->OurMissionModel->create($dataPost)) {
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
					redirect('admin/OurMission');
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
					redirect('admin/OurMission');
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
				redirect('admin/OurMission');
			}
		}
    }

    public function delete($id)
	{
		$delete = $this->OurMissionModel->delete($id);
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
			redirect('admin/OurMission');
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
			redirect('admin/OurMission');
		}
	}

    public function update($id = null)
	{
		$this->form_validation->set_rules('description', 'Deskripsi Our Mission', 'required|trim');
		$this->form_validation->set_rules('foto', 'Foto Our Mission', 'trim');

		if ($this->form_validation->run() == false) {

			/* Menampilkan Data Produk */
			$data["mission"]	 = $this->OurMissionModel->getOurMission($id);
			/* Menampilkan Data Produk Pada Form Edit */
			$this->load->view('admin/ourmission/edit', $data);
		} else {
			/* Update Data Produk */
			$update = $this->OurMissionModel->update(array(
				'ID_OURMISSION'		=> $this->input->post('id'),
				'DESCRIPTION'		=> $this->input->post('description'),
				'CREATED_AT'		=> date('Y-m-d h-m-s'),
				'UPDATED_AT'		=> date('Y-m-d h-m-s')
			), $id);
			if ($update) {
				/* Cek apakah ada Gambar yang mau di Edit */
				$ubahfoto = $_FILES['foto']['name'];
				if ($ubahfoto) {
					$config['allowed_types'] = 'jpg|jpeg|png';
					$config['max_size']		 = '2048';
					$config['upload_path'] 	 = './uploads/ourmission/';
					$config['file_name'] 	 = $ubahfoto;

					$this->upload->initialize($config);
					/* Jika ada Gambar di upload */
					if ($this->upload->do_upload('foto')) {
						$user = $this->db->get_where('tb_ourmission', ['ID_OURMISSION' => $id])->row_array();
						/* Menampilkan Foto Lama */
						$fotolama = $user['foto'];
						if ($fotolama) {
							unlink(FCPATH . './uploads/ourmission/' . $fotolama);
						}
						/* Update Foto Baru */
						$fotobaru = $this->upload->data('file_name');
						$this->db->set('FOTO', $fotobaru);
						$this->db->where('ID_OURMISSION', $id);
						$this->db->update('tb_ourmission');
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
						redirect('admin/OurMission');
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
				redirect('admin/OurMission');
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
				redirect('admin/OurMission');
			}
		}
	}

}
