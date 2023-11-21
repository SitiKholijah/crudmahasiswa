<!-- Form Start -->
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-sm-6">
            <div class="bg-light rounded p-4">
                <h4 class="mb-4 text-center">Form Ubah Data Prodi</h4>
                <form action="" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?= $prodi['id']; ?>">
                    <div class="form-floating mb-3">
                    <label for="nama">Nama Prodi</label>
                        <input type="text" class="form-control"  id="nama" name="nama" value="<?= $prodi['nama']; ?>" placeholder="">
                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-floating mb-3">
                    <label for="ruangan">Ruangan</label>
                        <input type="text" class="form-control" id="ruangan" name="ruangan" value="<?= $prodi['ruangan']; ?>" placeholder="">
                        <?= form_error('ruangan', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-floating mb-3">
                    <label for="jurusan">Jurusan</label>
                        <select class="form-select" id="jurusan" name="jurusan" aria-label="Jurusan">
                            <option value="" selected disabled>Jurusan</option>
                            <option value="JTI">JTI</option>
                            <option value="JTIN">JTIN</option>
                            <option value="AKUTANSI">AKUTANSI</option>
                        </select>
                        <?= form_error('jurusan', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-floating mb-3">
                    <label for="akreditasi">Akreditasi</label>
                        <input type="text" class="form-control" id="akreditasi" name="akreditasi" value="<?= $prodi['akreditasi']; ?>" placeholder="">
                    </div>
                    <div class="form-floating mb-3">
                    <label for="nama_kaprodi">Nama Kaprodi</label>
                        <input type="text" class="form-control" id="nama_kaprodi" name="nama_kaprodi" value="<?= $prodi['nama_kaprodi']; ?>" placeholder="">
                    </div>
                    <div class="form-floating mb-3">
                    <label for="tahun_berdiri">Tahun Berdiri</label>
                        <input type="text" class="form-control" id="tahun_berdiri" name="tahun_berdiri" value="<?= $prodi['tahun_berdiri']; ?>" placeholder="">
                    </div>
                    <div class="form-floating mb-3">
                    <label for="output_lulusan">Output Lulusan</label>
                        <input type="text" class="form-control" id="output_lulusan" name="output_lulusan" value="<?= $prodi['output_lulusan']; ?>" placeholder="">
                    </div>
                    <div class="form-group">
                        <img src="<?= base_url('asset/img/prodi/') . $prodi['gambar']; ?>" style="width: 100px;" class="img-thumbnail">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="gambar" id="gambar">
                                <label for="gambar" class="custom-file-label">Choose File</label>
                                <?= form_error('gambar', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                    <div class="text-center">
                    <button type="submit" class="btn btn-primary mx-2">Ubah Prodi</button>
                        <a href="<?= base_url('index.php/Prodi')?>" class="btn btn-danger mx-2">Tutup</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Form End -->
