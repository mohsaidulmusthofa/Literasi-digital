<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LayananController extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
		$this->load->model('admin/LayananModel');
		cek_session();
    }
}
?>