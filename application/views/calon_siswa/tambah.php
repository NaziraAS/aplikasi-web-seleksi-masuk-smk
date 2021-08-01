<div class="container">

	<form action="<?= base_url('Calon_siswa/tambah') ?>" method="post" enctype="multipart/form-data">
		<div class="row">
			<div class="col-md-6">
				<div class="card">
					<div class="card-header">
						Siswa
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="nisn">Nisn</label>
									<input type="text" class="form-control" id="nisn" name="nisn">
									<?php echo form_error('nisn', '<div class="text-danger">', '</div>'); ?>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="foto">Foto</label>
									<input type="file" class="form-control-file" id="foto" name="foto">
									<?php echo form_error('foto', '<div class="text-danger">', '</div>'); ?>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md">
								<label for="nama">Nama Lengkap</label>
								<input type="text" class="form-control" id="nama" name="namalengkap">
								<?php echo form_error('namalengkap', '<div class="text-danger">', '</div>'); ?>
							</div>
						</div>
						<div class="row mt-2 ml-1 mb-1">
							<div class="custom-control custom-radio custom-control-inline">
								<input type="radio" id="customRadioInline1" name="jeniskelamin" value="laki-laki" class="custom-control-input">
								<label class="custom-control-label" for="customRadioInline1">Laki-laki</label>
								<?php echo form_error('jeniskelamin', '<div class="text-danger">', '</div>'); ?>
							</div>
							<div class="custom-control custom-radio custom-control-inline">
								<input type="radio" id="customRadioInline2" name="jeniskelamin" value="perempuan" class="custom-control-input">
								<label class="custom-control-label" for="customRadioInline2">Perempuan</label>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<label for="tempat">Tempat Lahir</label>
								<input type="text" class="form-control" id="tempat" name="tempat">
								<?php echo form_error('tempat', '<div class="text-danger">', '</div>'); ?>
							</div>
							<div class="col-md-6">
								<label for="tanggal">Tanggal</label>
								<input type="date" class="form-control" id="tanggal" name="tanggal">
								<?php echo form_error('tanggal', '<div class="text-danger">', '</div>'); ?>
							</div>
						</div>
						<div class="row">
							<div class="form-group col-md-6">
								<label for="inputState">Agama</label>
								<select id="inputState" class="form-control" name="agama">
									<option>-- Pilih --</option>
									<option value="islam">Islam</option>
									<option value="kristen">Kristen</option>
									<option value="hindu">Hindu</option>
									<option value="budha">Budha</option>
								</select>
								<?php echo form_error('agama', '<div class="text-danger">', '</div>'); ?>
							</div>
							<div class="col-md-6">
								<label for="Alamat">Alamat</label>
								<input type="text" class="form-control" id="alamat" name="alamat">
								<?php echo form_error('alamat', '<div class="text-danger">', '</div>'); ?>
							</div>
						</div>
						<div class="row">
							<div class="col-md">
								<label for="asalsekolah">Asal Sekolah</label>
								<input type="text" class="form-control" id="asalsekolah" name="asalsekolah">
								<?php echo form_error('asalsekolah', '<div class="text-danger">', '</div>'); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card">
					<div class="card-header">
						Orang Tua
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-md">
								<div class="form-group">
									<label for="namaayah">Nama Ayah</label>
									<input type="text" class="form-control" id="namaayah" name="namaayah">
									<?php echo form_error('namaayah', '<div class="text-danger">', '</div>'); ?>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="pendidikanayah">Pendidikan Ayah</label>
									<input type="text" class="form-control" id="pendidikanayah" name="pendidikanayah">
									<?php echo form_error('pendidikanayah', '<div class="text-danger">', '</div>'); ?>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="pekerjaanayah">Pekerjaan Ayah</label>
									<input type="text" class="form-control" id="pekerjaanayah" name="pekerjaanayah">
									<?php echo form_error('pekerjaanayah', '<div class="text-danger">', '</div>'); ?>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md">
								<div class="form-group">
									<label for="namaibu">Nama ibu</label>
									<input type="text" class="form-control" id="namaibu" name="namaibu">
									<?php echo form_error('namaibu', '<div class="text-danger">', '</div>'); ?>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="pendidikanibu">Pendidikan Ibu</label>
									<input type="text" class="form-control" id="pendidikanibu" name="pendidikanibu">
									<?php echo form_error('pendidikanibu', '<div class="text-danger">', '</div>'); ?>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="pekerjaanibu">Pekerjaan Ibu</label>
									<input type="text" class="form-control" id="pekerjaanibu" name="pekerjaanibu">
									<?php echo form_error('pekerjaanibu', '<div class="text-danger">', '</div>'); ?>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="alamatortu">Alamat</label>
									<input type="text" class="form-control" id="alamatortu" name="alamatortu">
									<?php echo form_error('alamatortu', '<div class="text-danger">', '</div>'); ?>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="notelp">No Telepon</label>
									<input type="text" class="form-control" id="notelp" name="notelp">
									<?php echo form_error('notelp', '<div class="text-danger">', '</div>'); ?>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md">
								<div class="form-group">
									<label for="penghasilan">Penghasilan orang tua</label>
									<input type="text" class="form-control" id="penghasilan" name="penghasilan">
									<?php echo form_error('penghasilan', '<div class="text-danger">', '</div>'); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 justify-content-end">
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</div>
	</form>
</div>