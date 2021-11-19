<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TeamsModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function read()
    {
        return $this->db->get('tb_team')->result();
    }

    public function create($data = array())
    {
        return $this->db->insert('tb_team', $data);
    }

    public function update($data, $id)
    {
        $this->db->where('ID_MEMBER', $id);
        return $this->db->update('tb_team', $data);
    }

    public function delete($id)
    {
        $this->db->where('ID_MEMBER', $id);
        return $this->db->delete('tb_team');
    }

    public function detail($id)
    {
        $this->db->where('ID_MEMBER', $id);
        return $this->db->get("tb_team")->result();
    }
}
