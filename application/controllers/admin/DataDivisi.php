<?php



class DataDivisi extends CI_Controller{
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
        $data ['title'] = "Data Divisi";
        // query dari table data_divisi
        $data ['divisi'] = $this->ModelDivisi->get_data('data_divisi')->result();
        $this->load->view('templates_admin/header',$data); 
        $this->load->view('templates_admin/sidebar'); 
        $this->load->view('admin/dataDivisi',$data); 
        $this->load->view('templates_admin/footer'); 
    }
    // Controller tambahData Divisi
    public function tambahData()
    {
        $data ['title'] = "Tambah Data Divisi";
        $this->load->view('templates_admin/header',$data); 
        $this->load->view('templates_admin/sidebar'); 
        $this->load->view('admin/tambahDataDivisi',$data); 
        $this->load->view('templates_admin/footer'); 
    }
    public function tambahAksiData(){
        $nama_divisi = $this->input->post('nama_divisi');
        $data= array(
            'nama_divisi' => $nama_divisi,
            
        );
        $this->ModelDivisi->tambahData($data,'data_divisi');
        redirect('admin/dataDivisi');    
    }
    public function editData($id)
    {
        $where = array('id_divisi' => $id);
		$data['divisi'] = $this->db->query("SELECT * FROM data_divisi WHERE id_divisi='$id'")->result();
        $data ['title'] = "Edit Data Divisi";
        $this->load->view('templates_admin/header',$data); 
        $this->load->view('templates_admin/sidebar'); 
        $this->load->view('admin/editDataDivisi',$data); 
        $this->load->view('templates_admin/footer'); 
    }
    public function updateData()
    {
        $id_divisi					=$this->input->post('id_divisi');
		$nama_divisi			=$this->input->post('nama_divisi');

        $data = array(
            'nama_divisi'		=>$nama_divisi
        );
        $where = array(
            'id_divisi'=> $id_divisi,
        );

        $this->session->set_flashdata('success', 'Data Berhasi Di Edit !!!');


			$this->ModelDivisi->updateData($where,$data,'data_divisi');
 			redirect('admin/dataDivisi');
    }
    public function hapusData($id)
		{
			$where = array('id_divisi' => $id);
			$this ->ModelDivisi->hapus_data($where, 'data_divisi');

			$this->session->set_flashdata('success', 'Data Kontrakan Berhasi Di Hapus !!!');

			redirect('admin/dataDivisi');
		}

    
}




?>