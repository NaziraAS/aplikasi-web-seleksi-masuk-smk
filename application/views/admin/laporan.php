<div class="container">
    <div class="row justify-content-end mb-2">
        <div class="col-md-2">
            <a href="<?= base_url('admin/cetaklaporan'); ?>" target="_blank" id="print" class="btn btn-warning">print</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nisn</th>
                        <th scope="col">Nama lengkap</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Asal sekolah</th>
                        <th scope="col">No Telp orang tua</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($laporan as $lap) : ?>
                        <tr>
                            <th scope="row"><?= $no++ ?></th>
                            <td><?= $lap['nisn'] ?></td>
                            <td><?= $lap['nama_lengkap'] ?></td>
                            <td><?= $lap['alamat'] ?></td>
                            <td><?= $lap['asal_sekolah'] ?></td>
                            <td><?= $lap['no_tlp_ortu'] ?></td>
                            <td><?= $lap['status'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md text-center">
            <?= $this->pagination->create_links(); ?>
        </div>
    </div>
</div>
<!-- <script>
    let tombol = document.getElementById('print');
    tombol.addEventListener('click', function(e) {
        e.preventDefault();
        window.print();
    });
</script> -->