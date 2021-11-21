<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Counter extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
		$this->load->model('admin/CounterModel');
		cek_session();
    }

    /* Menampilkan Data */
    public function index(){
        $data['counter'] = $this->CounterModel->read();
        $this->load->view('admin/counter/counter', $data);
    }

    /*Edit Data*/

    public function update($id = null)
	{
		$this->form_validation->set_rules('nama', 'Deskripsi Counter', 'required|trim');
		$this->form_validation->set_rules('jumlah', 'Jumlah Data', 'trim');

		if ($this->form_validation->run() == false) {

			/* Menampilkan Data Produk */
			$data["counter"]	 = $this->CounterModel->getCounter($id);
			/* Menampilkan Data Produk Pada Form Edit */
			$this->load->view('admin/counter/edit', $data);
		} else {
			/* Update Data Produk */
			$update = $this->CounterModel->update(array(
				'ID_COUNTER'		=> $this->input->post('id'),
				'NAMA'		        => $this->input->post('nama'),
				'JUMLAH'		    => $this->input->post('jumlah'),
				'CREATED_AT'		=> date('Y-m-d h-m-s'),
				'UPDATED_AT'		=> date('Y-m-d h-m-s')
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
				redirect('admin/Counter');
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
				redirect('admin/Counter');
			}
		}
	}

}
