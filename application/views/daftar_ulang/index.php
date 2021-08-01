<main role="main" class="container">
		<div class="card">
			<div class="card-header">Data Daftar ualng Calon Siswa</div>
			<div class="card-body">
				<a href="<?php echo base_url(); ?>daftar_ulang/tambah" class="btn btn-success">Tambah</a>
				<br/>
				<br/>
				<table class="table table-bordered">
					<tr>
						<th width="5%">No</th>
						<th>ID Daftar Ulang</th>
						<th>NISN</th>
						<th>Tanggal</th>
						<th> Jam</th>						
						<th>Action</th>
					</tr>
					<?php 
					$no = 1;
					foreach($daftar_ulang as $row)
					{
						?>
						<tr>
							<td widtd="5%"><?php echo $no++; ?></td>
							<td><?php echo $row->id_daftarulang; ?></td>
							<td><?php echo $row->nisn; ?></td>
							<td><?php echo $row->tanggal; ?></td>
							<td><?php echo $row->jam; ?></td>
							<td>
							<a href="<?php echo base_url(); ?>daftar_ulang/edit/<?php echo $row->id_daftarulang; ?>" class="btn btn-warning">Edit</a>
							<a href="<?php echo base_url(); ?>daftar_ulang/delete/<?php echo $row->id_daftarulang; ?>" class="btn btn-danger">Hapus</a>
							</td>
						</tr>
						<?php
					}
					?>
				</table>
			</div>
		</div>
</main>