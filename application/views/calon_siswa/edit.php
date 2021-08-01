<div class="container">
		<div class="card">
			<div class="card-header">Edit Data Calon Siswa</div>
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
			<form method="post" action="<?php echo base_url(); ?>calon_siswa/update">
				<input type="hidden" name="nisn" id="nisn" value="<?php echo $calon_siswa->nisn; ?>"/>
				<div class="form-group">
					<label for="nisn">NISN</label>
					<input type="text" value="<?php echo $calon_siswa->nisn; ?>" class="form-control" id="nisn" name="nisn">
				</div>

                <div class="form-group">
					<label for="foto">Foto</label>
							<div class="col-sm-3">
								<img src="" class="img-thumbnail">
							</div>
							<div class="col-sm-9">
								<div class="custom-file">
									<input type="file" class="custom-file-input" id="foto" name="foto">
									<label class="custom-file-label" for="foto">Choose file</label>
								</div>
							</div>						
				</div>


				<div class="form-group">
					<label for="nama_lengkap">Nama Lengkap</label>
					<input type="text" class="form-control datepicker"   id="nama_lengkap" name="nama_lengkap" value="<?php echo $calon_siswa->nama_lengkap; ?>">
				</div>

				<div class="form-group">
					<label for="nama_panggilan">Nama Panggilan</label>
					<input type="text" class="form-control" value="<?php echo $calon_siswa->nama_panggilan; ?>" id="nama_panggilan" name="nama_panggilan">
				</div>

                <div class="form-group">
					<label for="jenis_kelamin">Jenis Kelamin</label>
					<select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
						<option value="laki-laki" <?php echo ($calon_siswa->jenis_kelamin ? 'laki-laki' : 'selected' ); ?> >Laki-Laki</option>
						<option value="perempuan" <?php echo ($calon_siswa->jenis_kelamin ? 'perempuan' : 'selected' ); ?>>Perempuan</option>
					</select>
				</div>

				<div class="form-group">
					<label for="tempat_lahir">Tempat Lahir</label>
					<input class="form-control" name="tempat_lahir" id="tempat_lahir"><?php echo $calon_siswa->tempat_lahir; ?>
				</div>

                <div class="form-group">
					<label for="tgl_lahir">Tanggal Lahir</label>
					<input type="text" class="form-control datepicker"   id="tgl_lahir" name="tgl_lahir" value="<?php echo $calon_siswa->tgl_lahir; ?>">
				</div>


				<div class="form-group">
					<label for="agama">Agama</label>
					<input type="text" class="form-control" id="agama" name="agama" value="<?php echo $calon_siswa->agama; ?>">
				</div>


				<div class="form-group">
					<label for="anak_ke">Anak Ke-</label>
					<input type="text" class="form-control" id="anak_ke" name="anak_ke" value="<?php echo $calon_siswa->anak_ke; ?>">
				</div>

                <div class="form-group">
					<label for="alamat">Alamat</label>
					<textarea class="form-control" name="alamat" id="alamat"><?php echo $calon_siswa->alamat; ?></textarea>
				</div>


				<div class="form-group">
					<label for="asal_sekolah">Asal Sekolah</label>
					<textarea class="form-control" name="asal_sekolah" id="asal_sekolah"><?php echo $calon_siswa->asal_sekolah; ?></textarea>
				</div>

        
				<div class="form-group">
					<label for="nilai_raport">Nilai Raport</label>
					<input type="text" class="form-control" id="nilai_raport" name="nilai_raport" value="<?php echo $calon_siswa->anak_ke; ?>">
				</div>


				
				<div class="form-group">
					<label for="nilai_uas">Nilai UAS</label>
					<input type="text" class="form-control" id="nilai_uas" name="nilai_uas" value="<?php echo $calon_siswa->nilai_uas; ?>">
				</div>



				<div class="form-group">
					<label for="nilai_un">Nilai UN</label>
					<input type="text" class="form-control" id="nilai_un" name="nilai_un" value="<?php echo $calon_siswa->nilai_un; ?>">
				</div>


				<div class="form-group">
					<label for="nilai_piagam">Nilai Piagam</label>
					<input type="text" class="form-control" id="nilai_piagam" name="nilai_piagam" value="<?php echo $calon_siswa->nilai_piagam; ?>">
				</div>


				<div class="form-group">
					<label for="pilihan_jurusan">Pilihan Jurusan</label>
					<input type="text" class="form-control" id="pilihan_jurusan" name="pilihan_jurusan" value="<?php echo $calon_siswa->pilihan_jurusan; ?>">
				</div>

                <div class="form-group">
					<label for="nama_ayah">Nama Ayah</label>
					<textarea class="form-control" name="nama_ayah" id="nama_ayah"><?php echo $calon_siswa->nama_ayah; ?></textarea>
				</div>

                <div class="form-group">
					<label for="pend_terakhir_ayah">Pendidikan Terakhir Ayah</label>
					<textarea class="form-control" name="pend_terakhir_ayah" id="pend_terakhir_ayah"><?php echo $calon_siswa->pend_terakhir_ayah; ?></textarea>
				</div>

                <div class="form-group">
					<label for="nama_ibu">Nama Ibu</label>
					<textarea class="form-control" name="nama_ibu" id="nama_ibu"><?php echo $calon_siswa->nama_ibu; ?></textarea>
				</div>
                <div class="form-group">
					<label for="pend_terakhir_ibu">Pendidikan Terakhir Ibu</label>
					<textarea class="form-control" name="pend_terakhir_ibu" id="pend_terakhir_ibu"><?php echo $calon_siswa->pend_terakhir_ibu; ?></textarea>
				</div>

                <div class="form-group">
					<label for="pekerjaan_ayah">Pekerjaan Ayah</label>
					<textarea class="form-control" name="pekerjaan_ayah" id="pekerjaan_ayah"><?php echo $calon_siswa->pekerjaan_ayah; ?></textarea>
				</div>

                <div class="form-group">
					<label for="pekerjaan_ibu">Pekerjaan Ibu</label>
					<textarea class="form-control" name="pekerjaan_ibu" id="pekerjaan_ibu"><?php echo $calon_siswa->pekerjaan_ibu; ?></textarea>
				</div>

				<div class="form-group">
					<label for="penghasilan_ortu">Penghasilan Orang Tua</label>
					<select name="penghasilan_ortu" id="penghasilan_ortu" class="form-control">
                    <option value="penghasilan_ortu">--pilih--</option>
						<option value="a">>Rp.500-1.000.000,</option>
						<option value="b">>Rp.1,000.000 - 5.000.000</option>
						<option value="c">Rp< 5.000.000’</option>
					</select>
				</div>

                <div class="form-group">
					<label for="alamat_ortu">Alamat Orang Tua</label>
					<textarea class="form-control" name="alamat_ortu" id="alamat_ortu"><?php echo $calon_siswa->alamat_ortu; ?></textarea>
				</div>


                <div class="form-group">
					<label for="no_tlp_ortu">No Telp Orang Tua</label>
					<input type="number" class="form-control" value="<?php echo $calon_siswa->no_tlp_ortu; ?>" id="no_tlp_ortu" name="no_tlp_ortu">
				</div>

                <div class="form-group">
					<label for="email">Email</label>
					<input type="email" class="form-control" value="<?php echo $calon_siswa->email; ?>" id="email" name="email">
				</div>

                <div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control" value="<?php echo $calon_siswa->password; ?>" id="password" name="password">
				</div>

                <div class="form-group">
					<label for="status_peserta">Status Peserta</label>
					<input type="text" class="form-control" value="<?php echo $calon_siswa->status_peserta; ?>" id="status_peserta" name="status_peserta">
				</div>

                <div class="form-group">
					<label for="status_verifikasi">Status Verifikasi</label>
					<input type="text" class="form-control" value="<?php echo $calon_siswa->status_verifikasi; ?>" id="status_verifikasi" name="status_verifikasi">
				</div>
                
				<button type="submit" class="btn btn-primary">Update</button>
			</form>
			</div>
		</div>
	</div>