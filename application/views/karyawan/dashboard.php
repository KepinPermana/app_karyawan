   <!-- Begin Page Content -->
   <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>

                    <div class="alert alert-success font-weight-bold mb-4" style="width:65%">Selamat datang anda login sebagai Karyawan</div>
                    <div class="card" style="margin-bottom: 120px; width: 65%">
                    <div class="card-header font-weight-bold bg-primary text-white">Data Pribadi Anda</div>
                    
                <table class="table table-bordered table-striped">
                <tr>
                    <th class="text-center">Email</th>
                    <th class="text-center">Nama</th>
                    <th class="text-center">Alamat</th>
                    <th class="text-center">Username</th>
                    <th class="text-center">Divisi</th>

                </tr>
                <!-- Perulangan untuk data divisi -->
                <?php foreach ($karyawan as $k): ?>
                    <tr>
                        <td><?= $k->email;?></td>
                       <td><?= $k->nama_karyawan;?></td>
                       <td><?= $k->alamat;?></td>
                       <td><?= $k->username;?></td>
                       <td><?= $k->divisi;?></td>
                    </tr>
                <?php endforeach; ?>
                </div>
    </div> 