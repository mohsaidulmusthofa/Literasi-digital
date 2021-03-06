<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JabatanModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function team()
    {
        $this->db->select('*');
        $this->db->from('tb_team');
        $this->db->join('tb_jabatan','tb_jabatan.ID_JABATAN = tb_team.ID_JABATAN');      
        $query = $this->db->get()->result();
        return $query;
    }

    public function read()
    {
        return $this->db->get('tb_jabatan')->result();
    }

    public function create($data = array())
    {
        return $this->db->insert('tb_jabatan', $data);
    }

    public function update($data, $id)
    {
        $this->db->where('ID_JABATAN', $id);
        return $this->db->update('tb_jabatan', $data);
    }

    public function delete($id)
    {
        $this->db->where('ID_JABATAN', $id);
        return $this->db->delete('tb_jabatan');
    }

    public function detail($id)
    {
        $this->db->where('ID_JABATAN', $id);
        return $this->db->get("tb_jabatan")->result();
    }

}

?>