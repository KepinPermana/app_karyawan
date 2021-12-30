

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>
            </div> <!-- Form Input Data Divisi -->
                           <div class="card" style="width: 60%">
                        <div class="card-body">
                            <form action="$_POST" action="<?php echo base_url('admin/DataDivisi/tambahDataAksi')?>">
                        
                            <div class="form-group">
                                <label>Nama Divisi</label>
                                <input type="text" name="data_divisi" class="form-control">
                                <?php echo form_error('nama_divisi','<div class="text-small text-danger"></div>')?>
                            </div>

                            <button type="submit" class="btn btn-success">Submit</button>
                        
                        </form>












                        <div class="col-md-7">
                            <table class="table">
                                <td>Email</td>
                                <td>:</td>
                                <td><?php echo $p->email ?></td>

                                <td>Nama Karyawan</td>
                                <td>:</td>
                                <td><?php echo $p->nama_karyawan ?></td>

                                <td>Alamat</td>
                                <td>:</td>
                                <td><?php echo $p->alamat ?></td>

                                <td>Username</td>
                                <td>:</td>
                                <td><?php echo $p->username ?></td>

                                <td>No Telepon</td>
                                <td>:</td>
                                <td><?php echo $p->divisi ?></td>

                                <td>Divisi</td>
                                <td>:</td>
                                <td><?php echo $p->divisi ?></td>
                            </table>
                        </div>