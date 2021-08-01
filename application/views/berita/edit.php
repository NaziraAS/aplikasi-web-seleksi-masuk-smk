<div class="container">
		<div class="card">
			<div class="card-header">Edit Berita</div>
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
			<form method="post" action="<?php echo base_url(); ?>berita/update">
				<input type="hidden" name="id_berita" id="id_berita" value="<?php echo $berita->id_berita; ?>"/>
				<div class="form-group">
					<label for="id_berita">Id Berita</label>
					<input type="text" value="<?php echo $berita->id_berita; ?>" class="form-control" id="id_berita" name="id_berita">
				</div>

				<div class="form-group">
					<label for="judul">Judul Berita</label>
					<input type="text" class="form-control" id="judul" name="judul" value="<?php echo $berita->judul; ?>">
				</div>

                <div class="form-group">
					<label for="isi_berita">Isi Berita</label>
					<input type="text" class="form-control" id="isi_berita" name="isi_berita" value="<?php echo $berita->isi_berita; ?>">
				</div>

                <div class="form-group">
					<label for="hari">Hari</label>
					<select name="hari" id="hari" class="form-control">
						<option value="senin" <?php echo ($berita->hari ? 'senin' : 'selected' ); ?> >Senin</option>
						<option value="selasa" <?php echo ($berita->hari ? 'selasa' : 'selected' ); ?>>Selasa</option>
                        <option value="rabu" <?php echo ($berita->hari ? 'rabu' : 'selected' ); ?> >Rabu</option>
						<option value="kamis" <?php echo ($berita->hari ? 'kamis' : 'selected' ); ?>>kamis</option>
                        <option value="jumat" <?php echo ($berita->hari ? 'jumat' : 'selected' ); ?> >Jumat</option>
						<option value="sabtu" <?php echo ($berita->hari ? 'sabtu' : 'selected' ); ?>>Sabtu</option>
                        <option value="minggu" <?php echo ($berita->hari ? 'senin' : 'selected' ); ?> >Minggu</option>
					</select>
				</div>

                <div class="form-group">
					<label for="tgl">Tanggal</label>
					<input type="date" class="form-control" id="tgl" name="tgl" value="<?php echo $berita->tgl; ?>">
				</div>

        
                <div class="form-group">
					<label for="jam">Jam</label>
					<input type="time" class="form-control" id="jam" name="jam" value="<?php echo $berita->jam; ?>">
				</div>

                <div class="form-group">
					<label for="gambar">Gambar</label>
					<input type="text" class="form-control" id="gambar" name="gambar" value="<?php echo $berita->gambar; ?>">
				</div>

      
				<div class="form-group">
					<label for="id_user">ID User</label>
					<textarea class="form-control" name="id_user" id="id_user"><?php echo $berita->id_user; ?></textarea>
				</div>

				<button type="submit" class="btn btn-primary">Update</button>
			</form>
			</div>
		</div>
	</div>