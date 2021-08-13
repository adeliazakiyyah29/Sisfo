<div class="container-fluid">
	<div class="col-lg-12">
		<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item active">Tambah Data KRS</li>
			<li class="breadcrumb-item"><a href="<?php echo base_url('administrator/krs')  ?>">Data KRS</a></li>
		</ol>
	</nav>
	</div>

	<form method="post" action="<?php echo base_url('administrator/krs/input_aksi') ?>">
	  <div class="form-group">
	    <label >Kelas</label>
	    <input type="text" class="form-control" name="kelas">
	    <?php echo form_error('kelas','<div class="text-danger small" ml-3>') ?>
	  </div>

	  <div class="form-group">
	    <label >Kode Matkul</label>
	    <input type="text" class="form-control" name="kode_matkul">
	    <?php echo form_error('kode_matkul','<div class="text-danger small" ml-3>') ?>
	  </div>

	  <div class="form-group">
	    <label >Nama Matkul</label>
	    <input type="text" class="form-control" name="matkul">
	    <?php echo form_error('matkul','<div class="text-danger small" ml-3>') ?>
	  </div>

	  <div class="form-group">
	    <label >SKS</label>
	    <input type="number" class="form-control" name="sks">
	    <?php echo form_error('sks','<div class="text-danger small" ml-3>') ?>
	  </div>

	  <div class="form-group">
	    <label >NIM</label>
	    <input type="number" class="form-control" name="nim">
	    <?php echo form_error('nim','<div class="text-danger small" ml-3>') ?>
	  </div>
	  <button type="submit" class="btn btn-primary">Simpan</button>
</form>

</div>