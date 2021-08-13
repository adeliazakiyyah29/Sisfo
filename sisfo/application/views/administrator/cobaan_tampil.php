<div class="container-fluid">
	<div class="col-lg-12">
		<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item" data-toggle="modal" data-target="#exampleModal">Semester 1</li>
		</ol>
	</nav>
	</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
      	<h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-book"></i>  Semester 1</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<form method="post" action="">
      		<table class="table table-bordered table-hover table striped">
		<tr>
			<th>NO</th>
			<th>Kelas</th>
			<th>kode Matkul</th>
			<th>Nama Matkul</th>
			<th>SKS</th>
			<th>NIM</th>
		</tr>
		<?php 
			$no =1;
			foreach ($krs as $k ) :  ?> <!-- krs dpt dari file controler $data-->

			<tr>
				<td width="20px"><?php echo $no++ ?></td>
				<td><div class="form-check">
					  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="kelas" checked><label class="form-check-label" for="exampleRadios1"></div><?php echo $k->kelas ?></label></td>
				<td><?php echo $k->kode_matkul ?></td>
				<td><?php echo $k->matkul ?></td>
				<td><?php echo $k->sks ?></td>
				<td><?php echo $k->nim ?></td>	
			</tr>
		<?php endforeach; ?>
		
	</table>
	<div class="modal-footer">
       <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      	</form>
        
      
    </div>
  </div>
</div>
	
	
	
</div>