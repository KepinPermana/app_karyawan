   <!-- Begin Page Content -->
   <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
                    </div>
                    
                    <?php foreach($divisi as $j) : ?>
                    <form method="post" action="<?php echo base_url().'admin/dataDivisi/updateData' ?>">
                   
                    

                        <div class="for-group">
	<label>Nama</label>
	<input type="hidden" name="id_divisi" class="form-control" value="<?php echo $j->id_divisi ?>">
	<input type="text" name="nama_divisi" class="form-control" value="<?php echo $j->nama_divisi ?>">
</div>
</form>

                    <?php endforeach; ?>

            </div> 