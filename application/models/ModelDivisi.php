<?php


class ModelDivisi extends CI_Model{
    public function get_data($table){
        return $this->db->get($table);
    }
    public function editData($where,$table)
	{
	return	$this->db->get_where($table,$where);
	}
    public function tambahData($data,$table){
		$this->db->insert($table,$data);
	}
    public function updateData($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
		return true;
	}
    public function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
}




?>