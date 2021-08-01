<main role="main" class="container">
		<div class="card">
			<div class="card-header">Data Kartu Pelajar</div>
			<div class="card-body">
				<a href="<?php echo base_url(); ?>kartu_pelajar/tambah" class="btn btn-success">Tambah</a>
				<br/>
				<br/>
				<table class="table table-bordered">
					<tr>
						<th width="5%">No</th>
						<th>ID Kartu Siswa</th>
						<th>ID NISN</th>						
						<th>Action</th>
					</tr>
					<?php 
					$no = 1;
					foreach($kartu_pelajar as $row)
					{
						?>
						<tr>
							<td widtd="5%"><?php echo $no++; ?></td>
							<td><?php echo $row->id_kartu_siswa; ?></td>
							<td><?php echo $row->id_nisn; ?></td>
							<td>
							<a href="<?php echo base_url(); ?>kartu_pelajar/edit/<?php echo $row->id_kartu_siswa; ?>" class="btn btn-warning">Edit</a>
							<a href="<?php echo base_url(); ?>kartu_pelajar/delete/<?php echo $row->id_kartu_siswa; ?>" class="btn btn-danger">Hapus</a>
							</td>
						</tr>
						<?php
					}
					?>
				</table>
			</div>
		</div>
</main>