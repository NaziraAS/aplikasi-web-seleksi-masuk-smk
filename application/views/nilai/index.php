<main role="main" class="container">
		<div class="card">
			<div class="card-header">Nilai Siswa</div>
			<div class="card-body">
				<a href="<?php echo base_url(); ?>nilai/tambah" class="btn btn-success">Tambah</a>
				<br/>
				<br/>
				<table class="table table-bordered">
					<tr>
						<th width="5%">No</th>
						<th>id </th>
						<th>Nilai Raport</th>
						<th>Nilai UAS </th>
						<th>Nilai UN </th>
						<th>Nilai Piagam </th>
						<th>Action</th>
					</tr>
					<?php 
					$no = 1;
					foreach($nilai as $row)
					{
						?>
						<tr>
							<td widtd="5%"><?php echo $no++; ?></td>
							<td><?php echo $row->id; ?></td>
							<td><?php echo $row->nilai_raport; ?></td>
							<td><?php echo $row->nilai_uas; ?></td>
							<td><?php echo $row->nilai_un; ?></td>
							<td><?php echo $row->nilai_piagam; ?></td>
							<td>
							<a href="<?php echo base_url(); ?>nilai/edit/<?php echo $row->id; ?>" class="btn btn-warning">Edit</a>
							<a href="<?php echo base_url(); ?>nilai/delete/<?php echo $row->id; ?>" class="btn btn-danger">Hapus</a>
							</td>
						</tr>
						<?php
					}
					?>
				</table>
			</div>
		</div>
</main>