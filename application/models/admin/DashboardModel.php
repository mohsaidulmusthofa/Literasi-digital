<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function count_product()
    {
        $query = $this->db->get('tb_produk');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function count_message()
    {
        $query = $this->db->get('tb_pesan');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function count_service()
    {
        $query = $this->db->get('tb_layanan');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function count_members()
    {
        $query = $this->db->get('tb_user');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
}
