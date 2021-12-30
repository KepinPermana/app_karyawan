<?php


class Dashboard extends CI_Controller{
    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('hak_akses')!='1') {
            $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Anda belum Login</strong> 
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			  </div>');
			  redirect('welcome');
        }
    }
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