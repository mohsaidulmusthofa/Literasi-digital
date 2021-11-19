<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OurMissionModel extends CI_Model{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function read(){
        return $this->db->get('tb_ourmission')->result();
    }

    public function create($data = array()){
        return $this->db->insert('tb_ourmission', $data);
    }

    public function getOurmission($id){
        $this->db->where('ID_OURMISSION', $id);
        return $this->db->get('tb_ourmission')->result();
    }

    public function update($data, $id)
    {
        $this->db->where('ID_OURMISSION', $id);
        return $this->db->update('tb_ourmission', $data);
    }

    public function delete($id){
        $this->db->where('ID_OURMISSION', $id);
        return $this->db->delete('tb_ourmission');
    }

}
?>