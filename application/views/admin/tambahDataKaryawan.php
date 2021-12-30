   <!-- Begin Page Content -->
   <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
                    </div>
                    <div class="modal-body">
			<form action="<?php echo base_url().'admin/dataKaryawan/tambahAksiData'; ?>" method="post" enctype="multipart/form-data">
            
			<div class="form-group">
				<label>Email</label>
				<input type="text" name="email" class="form-control" required>
			</div>
            <div class="form-group">
				<label>Nama Karyawan</label>
				<input type="text" name="nama_karyawan" class="form-control" required>
			</div>
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="username" class="form-control" required>
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" class="form-control" required>
			</div>
            <div class="form-group">
				<label>Alamat</label>
				<input type="text" name="alamat" class="form-control" required>
			</div>
            <div class="form-group">
				<label>No Telepon</label>
				<input type="text" name="no_tlp" class="form-control" required>
			</div>
            <div class="form-group">
				<label>Divisi</label>
				<input type="text" name="divisi" class="form-control" required>
			</div>
			
			<div class="form-group">
				<label>Hak Akses</label>
				<select name="hak_akses" class="form-control">
   					<option value="">--Pilih Hak Akses--</option>
					   <option value="1">Admin</option>
					   <option value="2">Karyawan</option>
				</select>
			</div>
            
        <button type="submit" class="btn btn-primary">Simpan</button>
	
            </form>
        </div>
            </div> 