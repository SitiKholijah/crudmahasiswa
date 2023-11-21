<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-center text-gray-800">
        <?php echo $judul; ?>
    </h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">
                    Form Tambah Calon Presiden
                </div>
                <div class="card-body">
                    <form action="<?= base_url('index.php/Capres/upload') ?>" method="POST">
                        <div class="form-group">
                            <label for="nik">Nik</label>
                            <input type="text" name="nik" class="form-control" id="nik" placeholder="nik">
                        </div>
                        <div class="form-group">
                            <label for="nama_lengkap">Nama Lengkap</label>
                            <input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap" placeholder="nama lengkap">
                        </div>
                        <div class="form-group">
                            <label for="asal">Asal</label>
                            <input type="text" name="asal" class="form-control" id="asal" placeholder="asal">
                        </div>
                        <div class="form-group">
                            <label for="partai_pendukung">Partai Pendukung</label>
                            <input type="text" name="partai_pendukung" class="form-control" id="partai_pendukung" placeholder="partai pendukung">
                        </div>
                        <div class="form-group">
                            <label for="riwayat_pekerjaan">Riwayat Pekerjaan</label>
                            <input type="text" name="riwayat_pekerjaan" class="form-control" id="riwayat_pekerjaan"
                                placeholder="riwayat pekerjaan">
                        </div>
                        <div class="form-group">
                            <label for="umur">Umur</label>
                            <input type="text" name="umur" class="form-control" id="umur" placeholder="umur">
                        </div>
                        <div class="text-center">
                            <button type="submit" name="tambah" class="btn btn-primary">Tambah Capres</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
