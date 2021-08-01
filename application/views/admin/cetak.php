<div class="container">
    <div class="row">
        <div class="col-md">
            <table class="table table-bordered">

                <thead>
                    <tr>
                        <h3 class="text-center">hallo</h3>
                    </tr>
                </thead>
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nisn</th>
                        <th scope="col">Nama lengkap</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Asal sekolah</th>
                        <th scope="col">No Telp orang tua</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($siswa as $lap) : ?>
                        <tr>
                            <th scope="row"><?= $no++ ?></th>
                            <td><?= $lap['nisn'] ?></td>
                            <td><?= $lap['nama_lengkap'] ?></td>
                            <td><?= $lap['alamat'] ?></td>
                            <td><?= $lap['asal_sekolah'] ?></td>
                            <td><?= $lap['no_tlp_ortu'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    window.print();
</script>