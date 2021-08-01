<main role="main" class="container">
		<div class="card">
			<div class="card-header">Data Berita</div>
			<div class="card-body">
				<a href="<?php echo base_url(); ?>berita/tambah" class="btn btn-success">Tambah</a>
				<br/>
				<br/>
				<table class="table table-bordered">
					<tr>
						<th width="5%">No</th>
						<th>ID Berita</th>
						<th>Judul</th>
						<th>Isi Berita</th>
						<th>Hari</th>
						<th>Tanggal</th>
						<th>Jam</th>
                        <th>Gambar</th>
						<th>ID User</th>
						<th>Action</th>
					</tr>
					<?php 
					$no = 1;
					foreach($berita as $row)
					{
						?>
						<tr>
							<td widtd="5%"><?php echo $no++; ?></td>
							<td><?php echo $row->id_berita; ?></td>
							<td><?php echo $row->judul; ?></td>
							<td><?php echo $row->isi_berita; ?></td>
							<td><?php echo $row->hari; ?></td>
							<td><?php echo $row->tgl; ?></td>
							<td><?php echo $row->jam; ?></td>
                            <td><?php echo $row->gambar; ?></td>
							<td><?php echo $row->id_user; ?></td>
							<td>
							<a href="<?php echo base_url(); ?>berita/edit/<?php echo $row->id_berita; ?>" class="btn btn-warning">Edit</a>
							<a href="<?php echo base_url(); ?>berita/delete/<?php echo $row->id_berita; ?>" class="btn btn-danger">Hapus</a>
							</td>
						</tr>
						<?php
					}
					?>
				</table>
			</div>
		</div>
</main>