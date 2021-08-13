<div class="container-fluid">
	<div class="col-lg-12">
		<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item active">Edit Data KRS</li>
			<li class="breadcrumb-item"><a href="<?php echo base_url('administrator/krs')  ?>">Data KRS</a
		</ol>
	</nav>
	</div>

	<?php foreach ($krs as $k) : ?>
		<form method="post" action="<?php echo base_url('administrator/krs/update_aksi') ?>">
			<div class="form-group">
				<label >Kelas</label>
	    		<input type="text" class="form-control" name="kelas" value="<?php echo $k->kelas?>">
			</div>

			<div class="form-group">
				<label >Kode Matkul</label>
	    		<input type="text" class="form-control" name="kode_matkul" value="<?php echo $k->kode_matkul?>">
			</div>

			<div class="form-group">
				<label >Nama Matkul</label>
	    		<input type="text" class="form-control" name="matkul" value="<?php echo $k->matkul?>">
			</div>

			<div class="form-group">
				<label >SKS</label>
	    		<input type="text" class="form-control" name="sks" value="<?php echo $k->sks?>">
			</div>

			<div class="form-group">
				<label >NIM</label>
	    		<input type="text" class="form-control" name="nim" value="<?php echo $k->nim?>">
			</div>
			<button type="submit" class="btn btn-primary">SIMPAN</button>
			
		</form>
	<?php endforeach; ?>
</div>
