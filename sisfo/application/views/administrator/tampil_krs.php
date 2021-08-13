<div class="container-fluid">
	<?php echo $this->session->flashdata('pesan') ?> <!--munculin alert -->
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
	<?php echo anchor('administrator/krs/input', '<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Tambah Jurusan</button>') ?>
	<a class="btn btn-sm btn-primary mb-3" href="#" data-toggle="modal" data-target="#modalTambahData">
                         Tambah Sub Menu Baru
                         </a>
	<table class="table table-bordered table-hover table striped">
		<tr>
			<th>NO</th>
			<th>Kelas</th>
			<th>kode Matkul</th>
			<th>Nama Matkul</th>
			<th>SKS</th>
			<th>NIM</th>
			<th colspan="2">AKSI</th>
		</tr>
		<?php 
			$no =1;
			foreach ($krs as $k ) :  ?> <!-- krs dpt dari file controler $data-->

			<tr>
				<td width="20px"><?php echo $no++ ?></td>
				<td><?php echo $k->kelas ?></td>
				<td><?php echo $k->kode_matkul ?></td>
				<td><?php echo $k->matkul ?></td>
				<td><?php echo $k->sks ?></td>
				<td><?php echo $k->nim ?></td>
				<td width="20px"><?php echo anchor('administrator/krs/update/'.$k->id_krs,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?></td>
				<td width="20px"><?php echo anchor('administrator/krs/delete/'.$k->id_krs,'<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>') ?></td>
				
			</tr>
		<?php endforeach; ?>
	</table>
	
</div>
<!-- Modal Tambah Data-->
        <div class="modal fade" id="modalTambahData" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <form action="<?= base_url('administrator/krs/submenu') ?>" method="POST">
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label">Kelas</label>
                                <input type="text" class="form-control" id="kelas" placeholder="Isi Kelas" name="kelas">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Kode Matkul</label>
                                <select name="kode_matkul" id="kode_matkul" class="form-control">
                                    <option value="">Pilih Kode Matkul</option>
                                    <?php foreach ($krs as $k) : ?>
                                        <option value="<?php echo $k->kode_matkul ?>"></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            <div class="mb-3">
                                <label class="form-label">Nama Matkul</label>
                                <select name="matkul" id="matkul" class="form-control">
                                    <option value="">Pilih Matkul</option>
                                    <?php foreach ($menu as $m) : ?>
                                        <option value="<?= $m['id_krs'] ?>"><?= $m['menu'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                             
                            </div>
                            <div class="mb-3">
                                <label class="form-label">SKS</label>
                                <input type="text" class="form-control" id="sks" placeholder="sks" name="sks">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>