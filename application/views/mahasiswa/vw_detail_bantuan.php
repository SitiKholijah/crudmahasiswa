<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1 class="h3 mb-0 text-gray-800 text-center"><?= $judul; ?></h1>
                </div>
                <div class="card-body">
                    <h2 class="card-title"><?= $bantuan['nama']; ?></h2>
                    <h6 class="card-subtitle mb-4 text-muted"><?= $bantuan['nama']; ?></h6>
                    <div class="row">
                        <div class="col-md-4">NIK:</div>
                        <div class="col-md-8"><?= $bantuan['nik']; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Jenis Kelamin:</div>
                        <div class="col-md-8"><?= $bantuan['jenis_kelamin']; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Jenis Bantuan:</div>
                        <div class="col-md-8"><?= $bantuan['jenis_bantuan']; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">No HP:</div>
                        <div class="col-md-8"><?= $bantuan['no_hp']; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Alamat:</div>
                        <div class="col-md-8"><?= $bantuan['alamat']; ?></div>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <a href="<?= base_url('index.php/Mahasiswa') ?>" class="btn btn-danger">Tutup</a>
                </div>
            </div>
        </div>
    </div>
</div>
