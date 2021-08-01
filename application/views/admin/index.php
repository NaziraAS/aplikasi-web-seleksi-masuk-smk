<main role="main" class="container">
	<div class="row">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">Daftar Siswa</div>
				<div class="card-body">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th scope="col" class="col-md-1">No</th>
								<th scope="col">Nama</th>
								<th scope="col">Status</th>
								<th scope="col" class="text-center">Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$no = 1;
							foreach ($siswa as $s) : ?>
								<tr>
									<th scope="row"><?= $no++; ?></th>
									<td><?= $s['nama_lengkap'] ?></td>
									<td><?= $s['status'] ?></td>
									<td class="text-center">
										<a href="<?= base_url('admin/editsiswa/') . $s['id'] ?>" class="btn btn-info">Edit</a>
										<a href="<?= base_url('admin/detail/') . $s['id'] ?>" class="btn btn-success">Detail</a>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="row mt-5">
		<div class="col-md text-center">
			<?= $this->pagination->create_links(); ?>
		</div>
	</div>
</main>