<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card border-info mb-3">
                <div class="row">
                    <div class="col-md-1">
                        <img src="<?= base_url('foto/IMG_20210724_080824.png') ?>" class="ml-4 mt-4" alt="" width="80px" height="80px">
                    </div>
                    <div class="col-md text-center mt-4">
                        <h5 class="header text-center mt-2">KARTU PELAJAR</h5>
                        <h5 class="header text-center">SMKN 1 BANGGAI LAUT</h5>
                        <p class="header text-center" style="font-size:10px;">Jl. Bubung Batu Desa Lampa, Pasir Putih Kec. Banggai Kab.banggai Laut, Sulteng</p>
                        <p class="header text-center" style="font-size:10px; margin-top:-15px;"><i>smkn1banggai@gmail.com</i></p>
                    </div>
                </div>
                <hr>
                <div class="card-body text-info">
                    <div class="row">
                        <div class="col-md-6">
                            <img class="card-img" src="<?= base_url('foto/') . $kartu['foto'] ?>" alt="Card image cap" width="50px">
                        </div>
                        <div class="col-md-6">
                            <h5 class="card-title">Nama :<?= $kartu['nama_lengkap']; ?></h5>
                            <h6 class="card-title">Nisn :<?= $kartu['nisn'] ?></h6>
                            <h6 class="card-title">Ttl :<?= $kartu['tempat_lahir'] ?></h6>
                            <h6 class="card-title">Agama :<?= $kartu['agama'] ?></h6>
                            <h6 class="card-title">Alamat :<?= $kartu['alamat'] ?></h6>
                            <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    window.print();
</script>