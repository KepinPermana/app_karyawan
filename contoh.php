// Form Validation untuk tambah data
    public function tambahDataAksi()
    {
        $this->_rules();

        if ($this->form_validation->run()== FALSE) {
            $this->tambahData();
        }else {
            $nama_divisi        = $this->input->post('nama_divisi');

            $data = array(
                
                'nama_divisi' => $nama_divisi,
            );

            $this->ModelDivisi->insert_data($data,'data_divisi');
            //alerts jika data berhasil di tambahkan
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data Berhasil di Tambahkan!</strong> You should check in on some of those fields below.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>');

          redirect('admin/DataDivisi');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nama_divisi','nama divisi','required');

    }