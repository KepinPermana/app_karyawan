   <!-- Begin Page Content -->
   <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
                    </div>

                    <a class="btn btn-sm btn-success mb-3" href="<?= base_url('admin/DataKaryawan/tambahData')?>"><i class="fas fa-plus">Tambah Data</i></a>

                    <table class="table table-bordered table-striped">
                

                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Nama Karyawan</th>
                        <th class="text-center">Alamat</th>
                        <th class="text-center">No Telelpon</th>
                        <th class="text-center">Divisi</th>
                        <th class="text-center">Hak Akses</th>
                        <th class="text-center">Aksi</th>
                        
                    </tr>
                    <?php $no=1; foreach ($karyawan as $k): ?>
                        <tr>
                            <td><?= $no++  ?></td>
                            <td><?= $k->email;?></td>
                            <td><?= $k->nama_karyawan;?></td>
                            <td><?= $k->alamat;?></td>
                            <td><?= $k->no_tlp;?></td>
                            <td><?= $k->divisi;?></td>
                            <?php if ($k->hak_akses=='1'){ ?>
                                <td>Admin</td>
                                <?php } else{ ?>
                                    <td>Karyawan</td>
                                    <?php }?>
                            <td><?php echo anchor('admin/dataKaryawan/editData/'.$k->id_karyawan,'<div class="btn btn-success btn-sm"><i class="fas fa-fw  fa-edit"></i></div>') ?>
                            <?php echo anchor('admin/DataKaryawan/hapusData/'.$k->id_karyawan,'<div class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i></div>') ?></td>
                           </td>
                        </tr>
                    <?php endforeach; ?>
                    <!-- Perulangan untuk data divisi -->
                    
                    </table>
            </div> 