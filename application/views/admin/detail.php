<div class="container">
    <div class="card mt-2">
        <div class="card-header">Data Calon Siswa</div>
        <div class="card-body">
            <div class="row">
                <div class="col-md">
                    <div class="row">
                        <div class="col-md-3">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Nisn</li>
                                <li class="list-group-item">Jurusan</li>
                                <li class="list-group-item">Nama Lengkap</li>
                                <li class="list-group-item">Jenis Kelamin</li>
                                <li class="list-group-item">Tempat lahir</li>
                                <li class="list-group-item">Agama</li>
                            </ul>
                        </div>
                        <div class="col-md">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">: <?= $siswa['nisn'] ?></li>
                                <li class="list-group-item">: <?= $siswa['jurusan'] ?></li>
                                <li class="list-group-item">: <?= $siswa['nama_lengkap'] ?></li>
                                <li class="list-group-item">: <?= $siswa['jenis_kelamin'] ?></li>
                                <li class="list-group-item">: <?= $siswa['tempat_lahir'] ?></li>
                                <li class="list-group-item">: <?= $siswa['agama'] ?></li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <img src="<?= base_url('foto/') . $siswa['foto'] ?>" class="rounded img-thumbnail" alt="..." width="400" height="500">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Alamat</li>
                                <li class="list-group-item">Asal Sekolah</li>
                                <li class="list-group-item">Nama Ayah</li>
                                <li class="list-group-item">Nama Ibu</li>
                                <li class="list-group-item">Pendidikan Ayah</li>
                                <li class="list-group-item">Pendidikan Ibu</li>
                                <li class="list-group-item">Pekerjaan Ayah </li>
                                <li class="list-group-item">Pekerjaan Ibu</li>
                                <li class="list-group-item">Alamat Ortu</li>
                                <li class="list-group-item">No. Telpon</li>
                                <li class="list-group-item">Penghasilan</li>
                            </ul>
                        </div>
                        <div class="col-md">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">: <?= $siswa['alamat'] ?></li>
                                <li class="list-group-item">: <?= $siswa['asal_sekolah'] ?></li>
                                <li class="list-group-item">: <?= $siswa['nama_ayah'] ?></li>
                                <li class="list-group-item">: <?= $siswa['nama_ibu'] ?></li>
                                <li class="list-group-item">: <?= $siswa['pend_ayah'] ?></li>
                                <li class="list-group-item">: <?= $siswa['pend_ibu'] ?></li>
                                <li class="list-group-item">: <?= $siswa['pekerjaan_ayah'] ?></li>
                                <li class="list-group-item">: <?= $siswa['pekerjaan_ibu'] ?></li>
                                <li class="list-group-item">: <?= $siswa['alamat_ortu'] ?></li>
                                <li class="list-group-item">: <?= $siswa['no_tlp_ortu'] ?></li>
                                <li class="list-group-item">: <?= $siswa['penghasilan_ortu'] ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="<?= base_url('admin') ?>" class="btn btn-success">kembali</a>
</div>