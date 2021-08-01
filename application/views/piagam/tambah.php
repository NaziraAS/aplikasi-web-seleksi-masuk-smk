<div class="container">
		<div class="card">
			<div class="card-header">Tambah Data Siswa</div>
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
			<form method="post" action="<?php echo base_url(); ?>piagam/save">
				<div class="form-group">
					<label for="id_piagam">ID Piagam</label>
					<input type="text" class="form-control" id="id_piagam" name="id_piagam">
				</div>

				<div class="form-group">
					<label for="nisn">NISN</label>
					<input type="text" class="form-control" id="nisn" name="nisn">
				</div>

				<div class="form-group">
					<label for="nama_piagam">Nama Piagam</label>
					<input type="text" class="form-control datepicker" id="nama_piagam" name="nama_piagam">
				</div>

				<div class="form-group">
					<label for="nilai">Nilai</label>
					<input type="text" class="form-control" id="nilai" name="nilai">
				</div>

				<div class="form-group">
					<label for="tingkat">Tingkat</label>
					<textarea class="form-control" name="tingkat" id="tingkat"></textarea>
				</div>

				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
			</div>
		</div>
	</div>