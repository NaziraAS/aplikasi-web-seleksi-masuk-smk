<div class="container">
		<div class="card">
			<div class="card-header">Edit Kartu Pelaja / Siswa</div>
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
			<form method="post" action="<?php echo base_url(); ?>kartu_pelajar/update">
				<input type="hidden" name="id_kartu_siswa" id="id_kartu_siswa" value="<?php echo $kartu_pelajar->id_kartu_siswa; ?>"/>
				<div class="form-group">
					<label for="id_kartu_siswa">ID Kartu Siswa</label>
					<input type="text" value="<?php echo $kartu_pelajar->id_kartu_siswa; ?>" class="form-control" id="id_kartu_siswa" name="id_kartu_siswa">
				</div>

				<div class="form-group">
					<label for="id_nisn">ID NISN </label>
					<input type="text" class="form-control" id="id_nisn" name="id_nisn" value="<?php echo $kartu_pelajar->id_nisn; ?>">
				</div>

				<button type="submit" class="btn btn-primary">Update</button>
			</form>
			</div>
		</div>
	</div>