<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1 class="h3 mb-0 text-gray-800 text-center"><?= $judul; ?></h1>
                </div>
                <div class="card-body">
                    <h2 class="card-title"><?= $capres['nama']; ?></h2>
                    <h6 class="card-subtitle mb-4 text-muted"><?= $capres['nik']; ?></h6>
                    <div class="row">
                        <div class="col-md-4">Nama Lengkap:</div>
                        <div class="col-md-8"><?= $capres['nama_lengkap']; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Asal:</div>
                        <div class="col-md-8"><?= $capres['asal']; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Partai Pendukung:</div>
                        <div class="col-md-8"><?= $capres['partai_pendukung']; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Riwayat Pekerjaan:</div>
                        <div class="col-md-8"><?= $capres['riwayat_pekerjaan']; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Umur:</div>
                        <div class="col-md-8"><?= $capres['umur']; ?></div>
                    </div>
                <div class="card-footer text-center">
                    <a href="<?= base_url('index.php/Mahasiswa') ?>" class="btn btn-danger">Tutup</a>
                </div>
            </div>
        </div>
    </div>
</div>
