<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CounterModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function read()
    {
        return $this->db->get('tb_counter')->result();
    }

    public function create($data = array())
    {
        return $this->db->insert('tb_counter', $data);
    }

    public function update($data, $id)
    {
        $this->db->where('ID_COUNTER', $id);
        return $this->db->update('tb_counter', $data);
    }

    public function delete($id)
    {
        $this->db->where('ID_COUNTER', $id);
        return $this->db->delete('tb_counter');
    }

    public function detail($id)
    {
        $this->db->where('ID_COUNTER', $id);
        return $this->db->get("tb_counter")->result();
    }
}
