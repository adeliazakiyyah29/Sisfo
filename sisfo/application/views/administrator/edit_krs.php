<div class="container-fluid">
	<div class="col-lg-12">
		<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item active">Edit Data KRS</li>
			<li class="breadcrumb-item"><a href="<?php echo base_url('administrator/krs')  ?>">Data KRS</a></li>
		</ol>
	</nav>
	</div>

	<form>
		<div class="form-group">
	    <label >NO</label>
	    <input type="text" readonly="" class="form-control" name="no">
	  </div>
	  <div class="form-group">
	    <label >Kelas</label>
	    <input type="text" class="form-control" name="kls">
	  </div>
	  <div class="form-group">
	    <label >Kode Matkul</label>
	    <input type="text" class="form-control" name="kmat">
	  </div>
	  <div class="form-group">
	    <label >Nama Matkul</label>
	    <input type="text" class="form-control" name="namat">
	  </div>
	  <div class="form-group">
	    <label >SKS</label>
	    <input type="number" class="form-control" name="sks">
	  </div>
	  <button type="submit" class="btn btn-primary">Simpan</button>
</form>

</div>