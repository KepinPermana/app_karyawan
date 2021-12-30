<div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
                    </div>
                    
                    <?php foreach($karyawan as $k) : ?>
                    <form method="post" action="<?php echo base_url().'admin/dataKaryawan/updateData' ?>">
                   
                    

                        <div class="for-group">
	<label>Email</label>
	<input type="hidden" name="id_karyawan" class="form-control" value="<?php echo $k->id_karyawan ?>">
	<input type="text" name="email" class="form-control" value="<?php echo $k->email ?>">
    <label>Nama Karyawan</label>
    <input type="text" name="nama_karyawan" class="form-control" value="<?php echo $k->nama_karyawan ?>">
    <label>Username</label>
    <input type="text" name="username" class="form-control" value="<?php echo $k->username ?>">
    <label>Password</label>
    <input type="text" name="password" class="form-control" value="<?php echo $k->password ?>">



    <label>Alamat</label>
    <input type="text" name="alamat" class="form-control" value="<?php echo $k->alamat ?>">

    <label>No Telepon</label>
    <input type="text" name="no_tlp" class="form-control" value="<?php echo $k->no_tlp ?>">

    <label>Divisi</label>
    <input type="text" name="divisi" class="form-control" value="<?php echo $k->divisi ?>">
    
                    <label>Hak Akses</label>
                    <select name="hak_akses" class="form-control">
                        <option value="<?= $k->hak_akses?>">
                    <?php if ($k->hak_akses=='1'){
                        echo "Admin";
                    }else{
                        echo "Karyawan";
                    }?>
                    
                    </option>
                        <option value="1">Admin</option>
                        <option value="2">Karyawan</option>
                    </select>
	
</div>
<button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>
</form>

                    <?php endforeach; ?>

            </div> 