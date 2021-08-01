<div class="container-fluid">
    <div class="row">
        <div class="col-sm-7">
            <div class="alert alert-primary" role="alert">
                Check hasil tes
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-9">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Rata rata raport</th>
                        <th scope="col">Rata rata UAS</th>
                        <th scope="col">Rata rata UN</th>
                        <th scope="col">Nilai Piagam</th>
                        <th scope="col">Rata - rata</th>
                        <th scope="col">Jurusan di pilih</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($hasil as $h) : ?>
                        <tr>
                            <th scope="row"><?= $no++ ?></th>
                            <td><?= $h['nilai_raport'] ?></td>
                            <td><?= $h['nilai_uas'] ?></td>
                            <td><?= $h['nilai_un'] ?></td>
                            <td><?= $h['nilai_piagam'] ?></td>
                            <td><?= $h['rata_rata'] ?></td>
                            <td><?= $h['namaJurusan'] ?></td>
                            <td><?= $h['status'] ?></td>
                            <td><a href="<?= base_url('Calon_siswa/sendmail') ?>" type="button" class="btn btn-success" data-toggle="tooltip" data-placement="right" title="dengan menekan tombol kirim anda akan menerima email untuk daftar ulang.">
                                    Kirim
                                </a></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>

        </div>
    </div>
</div>