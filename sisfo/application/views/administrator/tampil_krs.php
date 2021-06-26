<div class="container-fluid">
	<div class="alert alert-warning" role="alert"><i class="fas fa-exclamation-triangle"></i> Bukan Periode KRS</div>
	<div class="col-lg-12">
		<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item active">Data KRS</li>
		</ol>
	</nav>
	</div>
	
	
	<center>
		<legend class="mt-3">KARTU RENCANA STUDI</legend>

		<table>
			<tr>
				<td><strong>NIM</strong></td>
				<td>: 1700018281</td>
			</tr>
			<tr>
				<td><strong>Nama</strong></td>
				<td>: Adelia</td>
			</tr>
			<tr>
				<td><strong>Program Studi</strong></td>
				<td>: Teknik Informatika</td>
			</tr>
			<tr>
				<td><strong>Semester</strong></td>
				<td>: Genap 2020/2021</td>
			</tr>
		</table>
	</center>

	<table class="table table-bordered table-hover table striped">
		<tr>
			<th>NO</th>
			<th>Kelas</th>
			<th>kode Matkul</th>
			<th>Nama Matkul</th>
			<th>SKS</th>
			<th colspan="2">AKSI</th>
		</tr>
		<?php 
			$no =1;
			foreach ($krs as $k ) :  ?> <!-- krs dpt dari file controler $data-->

			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $k->kelas ?></td>
				<td><?php echo $k->kode_matkul ?></td>
				<td><?php echo $k->matkul ?></td>
				<td><?php echo $k->sks ?></td>
			</tr>
		<?php endforeach; ?>
	</table>
	<a class="btn btn-primary" href="<?php echo base_url('administrator/tambah_krs')  ?>">Tambah Data</a>
</div>