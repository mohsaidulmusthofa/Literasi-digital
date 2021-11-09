<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PerusahaanModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    
    public function read()
    {
        return $this->db->get('tb_bisnis')->result();
    }

    public function create($data = array())
    {
        return $this->db->insert('tb_bisnis', $data);
    }

    public function update($data, $id)
    {
        $this->db->where('ID_BISNIS', $id);
        return $this->db->update('tb_bisnis', $data);
    }

    public function delete($id)
    {
        $this->db->where('ID_BISNIS', $id);
        return $this->db->delete('tb_bisnis');
    }

    public function detail($id)
    {
        $this->db->where('ID_BISNIS', $id);
        return $this->db->get("tb_bisnis")->result();
    }

}

?>