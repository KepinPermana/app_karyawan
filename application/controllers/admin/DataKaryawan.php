<?php


class dataKaryawan extends CI_Controller{
    public function index()
    {
        $data = $this->db->query("SELECT * FROM data_karyawan")->result();
        var_dump($data);
    }
}


?>