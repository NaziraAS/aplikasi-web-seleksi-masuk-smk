<div class="container">
		<div class="card">
			<div class="card-header">Tambah Data Daftar Ulang Siswa</div>
			<div class="card-body">
			<?php 
			if(validation_errors() != false)
			{
				?>
				<div class="alert alert-danger" role="alert">
					<?php echo validation_errors(); ?>
				</div>
				<?php
			}
			?>
			<form method="post" action="<?php echo base_url(); ?>daftar_ulang/save">
				<div class="form-group">
					<label for="id_daftarulang">ID Daftar Ulang</label>
					<input type="text" class="form-control" id="id_daftarulang" name="id_daftarulang">
				</div>

				<div class="form-group">
					<label for="nisn"> NISN</label>
					<input type="text" class="form-control" id="nisn" name="nisn">
				</div>

				<div class="form-group">
					<label for="tanggal">Tanggal Lahir</label>
					<input type="date" class="form-control datepicker" id="tanggal" name="tanggal">
				</div>

				<div class="form-group">
					<label for="jam">Jam</label>
					<input type="time" class="form-control" id="jam" name="jam">
				</div>


				<button type="submit" class="btn btn-primary">Daftar</button>
			</form>
			</div>
		</div>
	</div>