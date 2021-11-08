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

    public function update($data = array(), $id)
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
        return $this->db->get('tb_user')->result();
    }

    public function getJab()
    {
        return $this->db->get('tb_jabatan')->result_array();
    }

    public function relasi($id)
    {
        $this->db->select('*');
        $this->db->from('tb_user');
        $this->db->join('tb_jabatan', 'tb_user.ID_JABATAN = tb_jabatan.ID_JABATAN', 'left');
        $this->db->where(['tb_user.ID_JABATAN' => $id]);
        return $this->db->get()->result();
    }
}

?>