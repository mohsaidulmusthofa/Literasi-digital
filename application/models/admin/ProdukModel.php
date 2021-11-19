<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ProdukModel extends CI_Model{

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function read()
    {
        return $this->db->get('tb_produk')->result();
    }

    public function create($data = array())
    {
        return $this->db->insert('tb_produk', $data);
    }

    public function update($data, $id)
    {
        $this->db->where('ID_PRODUK', $id);
        return $this->db->update('tb_produk', $data);
    }

    public function delete($id)
    {
        $this->db->where('ID_PRODUK', $id);
        return $this->db->delete('tb_produk');
    }

    public function getProduk($id)
    {
        $this->db->where('ID_PRODUK', $id);
        $sql = $this->db->get("tb_produk")->result();
        return $sql;
    }
}

?>