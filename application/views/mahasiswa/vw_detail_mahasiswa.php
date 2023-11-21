<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1 class="h3 mb-0 text-gray-800 text-center"><?= $judul; ?></h1>
                </div>
                <div class="card-body">
                    <h2 class="card-title"><?= $mahasiswa['nama']; ?></h2>
                    <h6 class="card-subtitle mb-4 text-muted"><?= $mahasiswa['email']; ?></h6>
                    <div class="row">
                        <div class="col-md-4">NIM:</div>
                        <div class="col-md-8"><?= $mahasiswa['nim']; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Jenis Kelamin:</div>
                        <div class="col-md-8"><?= $mahasiswa['jenis_kelamin']; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Prodi:</div>
                        <div class="col-md-8"><?= $mahasiswa['prodi']; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Asal Sekolah:</div>
                        <div class="col-md-8"><?= $mahasiswa['asal_sekolah']; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">No HP:</div>
                        <div class="col-md-8"><?= $mahasiswa['no_hp']; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Alamat:</div>
                        <div class="col-md-8"><?= $mahasiswa['alamat']; ?></div>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <a href="<?= base_url('index.php/Mahasiswa') ?>" class="btn btn-danger">Tutup</a>
                </div>
            </div>
        </div>
    </div>
</div>
