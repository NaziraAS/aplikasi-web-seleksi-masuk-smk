<div class="container ">
	<div class="row">
		<div class="col-md-6">
			<div class="card-header">Standar Penilaian</div>
			<form method="post" action="<?php echo base_url(); ?>admin/save">
				<select id="inputState" class="form-control mb-3 mt-3" name="idjurusan">
					<option selected>-Jurusan-</option>
					<?php foreach ($jurusan as $j) : ?>
						<option value="<?= $j['id_jurusan'] ?>"><?= $j['namaJurusan'] ?></option>
					<?php endforeach;
					?>
				</select>
				<div class="form-group">
					<label for="rata-rata">Standar nilai</label>
					<input type="text" class="form-control" id="rata-rata" name="n_ratarata">
				</div>
				<button type="submit" class="btn btn-primary">Simpan</button>
			</form>
		</div>
	</div>
</div>