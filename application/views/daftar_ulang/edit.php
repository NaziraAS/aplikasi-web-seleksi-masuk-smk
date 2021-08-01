<div class="container">
		<div class="card">
			<div class="card-header">Edit Daftar Ulang Siswa</div>
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
		        <form method="post" action="<?php echo base_url(); ?>daftar_ulang/update">
				<input type="hidden" name="id_daftarulang" id="id_daftarulang" value="<?php echo $daftar_ulang->id_daftarulang; ?>"/>
				<div class="form-group">
					<label for="id_daftarulang">ID Daftar Ulang</label>
					<input type="text" value="<?php echo $daftar_ulang->id_daftarulang; ?>" class="form-control" id="id_daftarulang" name="id_daftarulang">
				</div>
                <div class="form-group">
					<label for="nisn">NISN </label>
					<input type="text" class="form-control"   id="nisn" name="nisn" value="<?php echo $daftar_ulang->nisn; ?>">
				</div>

				<div class="form-group">
					<label for="tanggal">Tanggal </label>
					<input type="date" class="form-control"   id="tanggal" name="tanggal" value="<?php echo $daftar_ulang->tanggal; ?>">
				</div>

                <div class="form-group">
					<label for="jam">Jam </label>
					<input type="time" class="form-control"   id="jam" name="jam" value="<?php echo $daftar_ulang->jam; ?>">
				</div>

				<button type="submit" class="btn btn-primary">Update</button>
			</form>
			</div>
		</div>
	</div>