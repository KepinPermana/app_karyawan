

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
                    </div>
               
<!--  -->
                        <div class="modal-body">
			<form action="<?php echo base_url().'admin/dataDivisi/tambahAksiData'; ?>" method="post" enctype="multipart/form-data">

			
			<div class="form-group">
				<label>Nama Divisi</label>
				<input type="text" name="nama_divisi" class="form-control" required>
			</div>
            <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Simpan</button>
	  </div>
            </form>
                        </div>

                        </div>
                        </div>
            </div>