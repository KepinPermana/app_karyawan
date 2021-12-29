<?php



class DataDivisi extends CI_Controller{
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
    public function editData($id_divisi)
    {
        $data ['title'] = "Edit Data Divisi";
        $where = array('id_divisi' => $id_divisi);
		$data['karyawan'] = $this->ModelDivisi->editData($where,'data_divisi')->result();
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

    
}




?>