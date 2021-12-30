<?php


class dataKaryawan extends CI_Controller{
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
        $hak_akses = $this->input->post('hak_akses');
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $data= array(
            'email' => $email,
            'nama_karyawan' => $nama_karyawan,
            'alamat' => $alamat,
            'no_tlp' => $no_tlp,
            'divisi' => $divisi,
            'hak_akses' => $hak_akses,
            'username' => $username,
            'password' => $password,
            
        );
        $this->ModelDivisi->tambahData($data,'data_karyawan');
        redirect('admin/dataKaryawan');    
    }
    public function editData($id)
    {
        $where = array('id_karyawan' => $id);
		$data['karyawan'] = $this->db->query("SELECT * FROM data_karyawan WHERE id_karyawan='$id'")->result();
        $data ['title'] = "Edit Data Karyawan";
        $this->load->view('templates_admin/header',$data); 
        $this->load->view('templates_admin/sidebar'); 
        $this->load->view('admin/editDataKaryawan',$data); 
        $this->load->view('templates_admin/footer'); 
    }
    public function updateData()
    {
        $id_karyawan					=$this->input->post('id_karyawan');
		$email			=$this->input->post('email');
        $nama_karyawan			=$this->input->post('nama_karyawan');
        $alamat			=$this->input->post('alamat');
        $no_tlp			=$this->input->post('no_tlp');
        $divisi			=$this->input->post('divisi');
        $hak_akses			=$this->input->post('hak_akses');
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));






        $data = array(
            'email'		=>$email,
            'nama_karyawan'		=>$nama_karyawan,
            'alamat'		=>$alamat,
            'no_tlp'		=>$no_tlp,
            'divisi'		=>$divisi,
            'hak_akses'		=>$hak_akses,
            'username' => $username,
            'password' => $password,
        );
        $where = array(
            'id_karyawan'=> $id_karyawan,
        );

        $this->session->set_flashdata('success', 'Data Berhasi Di Edit !!!');


			$this->ModelDivisi->updateData($where,$data,'data_karyawan');
 			redirect('admin/dataKaryawan');
    }
    public function hapusData($id)
    {
        $where = array('id_karyawan' => $id);
        $this ->ModelDivisi->hapus_data($where, 'data_karyawan');

        $this->session->set_flashdata('success', 'Data Karyawan Berhasi Di Hapus !!!');

        redirect('admin/dataKaryawan');
    }
     

}


?>