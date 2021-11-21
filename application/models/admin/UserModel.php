<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function index()
    {
        return $this->db->query("SELECT * FROM tb_jabatan, tb_team WHERE tb_jabatan.ID_JABATAN = tb_team.ID_JABATAN")->result();
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

    public function getJabatan()
    {
        return $this->db->get('tb_jabatan')->result();
    }

    public function detail($id)
    {
        $this->db->where('ID_MEMBER', $id);
        return $this->db->get("tb_team")->result();
    }

    public function getJab()
    {
        $query = $this->db->get('tb_jabatan');
        return $query->result_array();
    }

    public function getDetail($id)
    {
        $query = $this->db->query("SELECT * FROM tb_team, tb_jabatan WHERE tb_team.ID_JABATAN = tb_jabatan.ID_JABATAN AND tb_team.ID_MEMBER = '$id'")->result();
        return $query;
    }

}

?>