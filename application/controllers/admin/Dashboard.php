<?php


class Dashboard extends CI_Controller{
    public function index()
    {
        //controller untuk tampilan dashboard admin
       $data ['title']="Dashboard"; // $title tampilan untuk title di view dashboard.php
       //query menampilkan database data_karyawan
        $karyawan = $this->db->query("SELECT * FROM data_karyawan");
        $divisi = $this->db->query("SELECT * FROM data_divisi");
        $data ['karyawan']=$karyawan->num_rows();
        $data ['divisi']=$divisi->num_rows();
       // Controller dashboard
		$this->load->view('templates_admin/header',$data); 
        $this->load->view('templates_admin/sidebar'); 
        $this->load->view('admin/dashboard',$data); 
        $this->load->view('templates_admin/footer'); 
        
		
    }
}





?>