<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PesanModel extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    
    public function read()
    {
        return $this->db->get('tb_pesan')->result();
    }

    public function delete($id)
    {
        $this->db->where('ID_PESAN', $id);
        return $this->db->delete('tb_pesan');
    }

    public function create($data = array())
    {
        return $this->db->insert('tb_pesan', $data);
    }
}

?>