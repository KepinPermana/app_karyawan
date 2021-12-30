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
	public function cek_login()
	{
		$username	= set_value('username');
		$password	= set_value('password');

		$result		= $this->db->where('username',$username)
								->where('password',md5($password))
								->limit(1)
								->get('data_karyawan');
		if ($result->num_rows()>0) {

			return $result->row();
		}else {
			return FALSE;
		}
	}
}




?>