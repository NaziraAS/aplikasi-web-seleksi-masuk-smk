<div class="container">
	<a href="<?php echo base_url(); ?>calon_siswa/tambah" class="btn btn-success">Tambah</a>
	<a href="<?php echo base_url(); ?>calon_siswa/standar_penilaian_siswa" class="btn btn-success">Cek Nilai</a>
	<a href="<?php echo base_url('calon_siswa/editprofile/' . $profile['id']); ?>" class="btn btn-warning">Edit</a>
	<div class="card mt-2">
		<div class="card-header">Data Calon Siswa</div>
		<h6 class="card-header">Status :<?= $profile['status'] ?></h6>
		<div class="card-body">
			<div class="row">
				<div class="col-md">
					<div class="row">
						<div class="col-md-3">
							<ul class="list-group list-group-flush">
								<li class="list-group-item">NISN</li>
								<li class="list-group-item">Nama Lengkap</li>
								<li class="list-group-item">Jenis Kelamin</li>
								<li class="list-group-item">Tempat lahir</li>
								<li class="list-group-item">Agama</li>
							</ul>
						</div>
						<div class="col-md">
							<ul class="list-group list-group-flush">
								<li class="list-group-item">: <?= $profile['nisn'] ?></li>
								<li class="list-group-item">: <?= $profile['nama_lengkap'] ?></li>
								<li class="list-group-item">: <?= $profile['jenis_kelamin'] ?></li>
								<li class="list-group-item">: <?= $profile['tempat_lahir'] ?></li>
								<li class="list-group-item">: <?= $profile['agama'] ?></li>
							</ul>
						</div>
						<div class="col-md-6">
							<img src="<?= base_url('foto/') . $profile['foto'] ?>" class="rounded img-thumbnail" alt="..." width="400" height="500">
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<ul class="list-group list-group-flush">
								<li class="list-group-item">Alamat</li>
								<li class="list-group-item">Asal Sekolah</li>
								<li class="list-group-item">Nama Ayah</li>
								<li class="list-group-item">Nama Ibu</li>
								<li class="list-group-item">Pendidikan Ayah</li>
								<li class="list-group-item">Pendidikan Ibu</li>
								<li class="list-group-item">Pekerjaan Ayah </li>
								<li class="list-group-item">Pekerjaan Ibu</li>
								<li class="list-group-item">Alamat Ortu</li>
								<li class="list-group-item">No. Telpon</li>
								<li class="list-group-item">Penghasilan</li>
							</ul>
						</div>
						<div class="col-md">
							<ul class="list-group list-group-flush">
								<li class="list-group-item">: <?= $profile['alamat'] ?></li>
								<li class="list-group-item">: <?= $profile['asal_sekolah'] ?></li>
								<li class="list-group-item">: <?= $profile['nama_ayah'] ?></li>
								<li class="list-group-item">: <?= $profile['nama_ibu'] ?></li>
								<li class="list-group-item">: <?= $profile['pend_ayah'] ?></li>
								<li class="list-group-item">: <?= $profile['pend_ibu'] ?></li>
								<li class="list-group-item">: <?= $profile['pekerjaan_ayah'] ?></li>
								<li class="list-group-item">: <?= $profile['pekerjaan_ibu'] ?></li>
								<li class="list-group-item">: <?= $profile['alamat_ortu'] ?></li>
								<li class="list-group-item">: <?= $profile['no_tlp_ortu'] ?></li>
								<li class="list-group-item">: <?= $profile['penghasilan_ortu'] ?></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>