<main role="main" class="container">
		<div class="card">
			<div class="card-header">Data Piagam Siswa</div>
			<div class="card-body">
				<a href="<?php echo base_url(); ?>piagam/tambah" class="btn btn-success">Tambah</a>
				<br/>
				<br/>
				<table class="table table-bordered">
					<tr>
						<th width="5%">No</th>
						<th>id Piagam</th>
						<th>NISN</th>
						<th>Nama Piagam</th>
						<th>Nilai</th>
						<th>Tingkat</th>
						<th>Action</th>
					</tr>
					<?php 
					$no = 1;
					foreach($piagam as $row)
					{
						?>
						<tr>
							<td widtd="5%"><?php echo $no++; ?></td>
							<td><?php echo $row->id_piagam; ?></td>
							<td><?php echo $row->nisn; ?></td>
							<td><?php echo $row->nama_piagam; ?></td>
							<td><?php echo $row->nilai; ?></td>
							<td><?php echo $row->tingkat; ?></td>
							<td>
							<a href="<?php echo base_url(); ?>piagam/edit/<?php echo $row->id_piagam; ?>" class="btn btn-warning">Edit</a>
							<a href="<?php echo base_url(); ?>piagam/delete/<?php echo $row->id_piagam; ?>" class="btn btn-danger">Hapus</a>
							</td>
						</tr>
						<?php
					}
					?>
				</table>
			</div>
		</div>
</main>