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
        return $this->db->query("SELECT * FROM tb_jabatan, tb_user WHERE tb_jabatan.ID_JABATAN = tb_user.ID_JABATAN")->result();
    }

    public function read()
    {
        return $this->db->get('tb_user')->result();
    }

    public function create($data = array())
    {
        return $this->db->insert('tb_user', $data);
    }

    public function update($data, $id)
    {
        $this->db->where('ID_USER', $id);
        return $this->db->update('tb_user', $data);
    }

    public function delete($id)
    {
        $this->db->where('ID_USER', $id);
        return $this->db->delete('tb_user');
    }

    public function getJabatan()
    {
        return $this->db->get('tb_jabatan')->result();
    }

    public function detail($id)
    {
        $this->db->where('ID_USER', $id);
        return $this->db->get("tb_user")->result();
    }

    public function getJab()
    {
        $query = $this->db->get('tb_jabatan');
        return $query->result_array();
    }

    public function getDetail($id)
    {
        $query = $this->db->query("SELECT * FROM tb_user, tb_jabatan WHERE tb_user.ID_JABATAN = tb_jabatan.ID_JABATAN AND tb_user.ID_USER = '$id'")->result();
        return $query;
    }

}

?>