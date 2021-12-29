

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
                    </div>

                    <a class="btn btn-sm btn-success mb-3" href="<?= base_url('admin/DataDivisi/tambahData')?>"><i class="fas fa-plus">Tambah Data</i></a>
                    <table class="table table-bordered table-striped">
                

                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Nama Divisi</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                    <!-- Perulangan untuk data divisi -->
                    <?php $no=1; foreach ($divisi as $j): ?>
                        <tr>
                            <td><?= $no++  ?></td>
                            <td><?= $j->nama_divisi;?></td>
                            <td><?php echo anchor('admin/dataDivisi/editData/'.$j->id_divisi,'<div class="btn btn-success btn-sm"><i class="fas fa-fw  fa-edit"></i></div>') ?></td>
                            <td><?php echo anchor('admin/data_kontrakan/hapus/'.$j->id_divisi,'<div class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i></div>') ?></td>
                           </td>
                        </tr>
                    <?php endforeach; ?>

                    </table>
            </div>