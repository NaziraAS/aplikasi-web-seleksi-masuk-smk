<div class="container">
		<div class="card">
			<div class="card-header">Tambah Data Berita</div>
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
			<form method="post" action="<?php echo base_url(); ?>berita/save">
				<div class="form-group">
					<label for="id_berita">ID Berita</label>
					<input type="text" class="form-control" id="id_berita" name="id_berita">
				</div>

				<div class="form-group">
					<label for="judul">Judul</label>
					<input type="text" class="form-control" id="judul" name="judul">
				</div>

				<div class="form-group">
					<label for="isi_berita">Isi Berita</label>
					<input type="text" class="form-control datepicker" id="isi_berita" name="isi_berita">
				</div>

				<div class="form-group">
					<label for="hari">Hari</label>
					<select name="hari" id="hari" class="form-control">
                    <option value="pilih">--pilih--</option>
						<option value="senin">Senin</option>
						<option value="selasa">Selasa</option>
                        <option value="rabu">Rabu</option>
						<option value="kamis">Kamis</option>
                        <option value="jumat">Jumat</option>
						<option value="sabtu">Sabtu</option>
                        <option value="minggu">Minggu</option>
					</select>
				</div>

				<div class="form-group">
					<label for="tgl">Tanggal</label>
					<input type="date" class="form-control" id="tgl" name="tgl">
				</div>

                <div class="form-group">
					<label for="jam">Jam</label>
					<input type="time" class="form-control datepicker" id="jam" name="jam">
				</div>

                <div class="form-group">
					<label for="gambar">Gambar</label>
					<input type="text" class="form-control datepicker" id="gambar" name="gambar">
				</div>

                <div class="form-group">
					<label for="id_user">ID User</label>
					<input type="text" class="form-control datepicker" id="id_user" name="id_user">
				</div>

				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
			</div>
		</div>
	</div>