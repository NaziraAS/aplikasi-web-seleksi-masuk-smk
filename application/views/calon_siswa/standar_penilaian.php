<div class="container">
	<div class="card col-md-6">
		<div class="card-header">Cek Nilai Calon Siswa</div>
		<div class="card-body">
			<?php
			if (validation_errors() != false) {
			?>
				<div class="alert alert-danger" role="alert">
					<?php echo validation_errors(); ?>
				</div>
			<?php
			}
			?>
			<form action="<?php echo base_url(); ?>calon_siswa/cekNilai" method="post">
				<select id="inputState" class="form-control mb-3 mt-3" name="idjurusan" onchange="showNilai(this.value)">
					<option value="">-Jurusan-</option>
					<?php foreach ($jurusan as $j) : ?>
						<option value="<?= $j['id_jurusan'] ?>"><?= $j['namaJurusan'] ?></option>
					<?php endforeach;
					?>
				</select>
				<div class="form-group">
					<label for="nilai_raport">Nilai Raport</label>
					<input type="text" class="form-control" id="nilai_raport" name="nilai_rapot">
				</div>
				<div class="form-group">
					<label for="nilai_uas">Nilai UAS</label>
					<input type="text" class="form-control" id="nilai_uas" name="nilai_uas">
				</div>

				<div class="form-group">
					<label for="nilai_un">Nilai UN </label>
					<input type="text" class="form-control" id="nilai_un" name="nilai_un">
				</div>

				<div class="dropdown-divider"></div>
				<div class="form-group">
					<label for="internasional">Piagam Internasional</label>
					<input type="text" class="form-control " id="internasional" name="internasional">
					<small id="internasional" class="form-text text-muted"><sup>*</sup>Opsional : tambahkan jumlah piagam internasional jika ada</small>
				</div>
				<div class="form-group">
					<label for="nasional">Piagam Nasional</label>
					<input type="text" class="form-control " id="nasional" name="nasional">
					<small id="nasional" class="form-text text-muted"><sup>*</sup>Opsional : tambahkan jumlah piagam nasional jika ada</small>
				</div>
				<div class="form-group">
					<label for="provinsi">Piagam Provinsi</label>
					<input type="text" class="form-control " id="provinsi" name="provinsi">
					<small id="provinsi" class="form-text text-muted"><sup>*</sup>Opsional :tambahkan jumlah piagam provinsi jika ada</small>
				</div>
				<div class="form-group">
					<label for="kabupaten">Piagam Kabupaten</label>
					<input type="text" class="form-control " id="kabupaten" name="kabupaten">
					<small id="kabupaten" class="form-text text-muted"><sup>*</sup>Opsional :tambahkan jumlah piagam kabupaten jika ada</small>
				</div>
				<div class="form-group">
					<label for="kecamatan">Piagam Kecamatan</label>
					<input type="text" class="form-control " id="kecamatan" name="kecamatan">
					<small id="kecamatan" class="form-text text-muted"><sup>*</sup>Opsional :tambahkan jumlah piagam kecamatan jika ada</small>
				</div>

				<button type="submit" id="cek" class="btn btn-primary">Cek nilai</button>
			</form>
		</div>
	</div>
</div>
<script>
	function showNilai(id) {
		let xhr = new XMLHttpRequest();
		xhr.onreadystatechange = function() {
			if (xhr.readyState == 4 && xhr.status == 200) {
				console.log(this.responseText);
				// document.getElementById('txt').innerHTML = this.responseText;
			}
		}
		// xhr.onload = function() {
		// }
		xhr.open('GET', 'http://localhost/aplikasi-mujad/Calon_siswa/getNilai/' + id, true);
		xhr.send();
	}
</script>