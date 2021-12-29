<?php


class dataKaryawan extends CI_Controller{
    public function index()
    {
        $data['title']= "Data Karyawan";
        $data['karyawan']=$this->ModelDivisi->get_data('data_karyawan')->result();
        $this->load->view('templates_admin/header',$data); 
        $this->load->view('templates_admin/sidebar'); 
        $this->load->view('admin/dataKaryawan',$data); 
        $this->load->view('templates_admin/footer'); 
    }
    public function tambahData()
    {
        $data ['title'] = "Tambah Data Karyawan";
        $this->load->view('templates_admin/header',$data); 
        $this->load->view('templates_admin/sidebar'); 
        $this->load->view('admin/tambahDataKaryawan',$data); 
        $this->load->view('templates_admin/footer'); 
    }
    public function tambahAksiData(){
        $email = $this->input->post('email');
        $nama_karyawan = $this->input->post('nama_karyawan');
        $alamat = $this->input->post('alamat');
        $no_tlp = $this->input->post('no_tlp');
        $divisi = $this->input->post('divisi');
        $data= array(
            'email' => $email,
            'nama_karyawan' => $nama_karyawan,
            'alamat' => $alamat,
            'no_tlp' => $no_tlp,
            'divisi' => $divisi,
            
        );
        $this->ModelDivisi->tambahData($data,'data_karyawan');
        redirect('admin/dataKaryawan');    
    }
}


?>