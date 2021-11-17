<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PagesController extends CI_Controller {

	public function index()
	{
		$this->load->view('user/index');
	}

	public function product_details() {
		$this->load->view('user/detailproduk');
	}
}
