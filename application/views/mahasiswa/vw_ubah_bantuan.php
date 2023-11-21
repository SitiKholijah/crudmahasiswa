<!-- Form Start -->
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-6 mx-auto">
            <div class="bg-light rounded p-4 mt-4">
                <h4 class="mb-4 text-center">Form Ubah Data Calon Bantuan</h4>
                <form action="" method="POST">
                    <input type="hidden" name="id" value="<?= $bantuan['id']; ?>">
                    
                    <div class="form-floating mb-3">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama" name="nama"
                            value="<?= $bantuan['nama']; ?>" placeholder="">
                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    
                    <div class="form-floating mb-3">
                        <label for="nik">NIK</label>
                        <input type="text" class="form-control" id="nik" name="nik"
                            value="<?= $bantuan['nik']; ?>" placeholder="">
                        <?= form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    
                    <div class="form-floating mb-3">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                            <option value="Laki-Laki" <?= ($bantuan['jenis_kelamin'] == "Laki-laki") ? 'selected' : ''; ?>>
                                Laki-laki
                            </option>
                            <option value="Perempuan" <?= ($bantuan['jenis_kelamin'] == "Perempuan") ? 'selected' : ''; ?>>
                                Perempuan
                            </option>
                        </select>
                    </div>
                    
                    <div class="form-floating mb-3">
                        <label for="jenis_bantuan">Jenis Bantuan</label>
                        <input type="text" class="form-control" id="jenis_bantuan" name="jenis_bantuan"
                            value="<?= $bantuan['jenis_bantuan']; ?>" placeholder="">
                    </div>
                    
                    <div class="form-floating mb-3">
                        <label for="no_hp">No HP</label>
                        <input type="text" class="form-control" id="no_hp" name="no_hp"
                            value="<?= $bantuan['no_hp']; ?>" placeholder="">
                    </div>
                    
                    <div class="form-floating mb-3">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat"
                            value="<?= $bantuan['alamat']; ?>" placeholder="">
                    </div>
                    
                    <div class="text-center">
                        <a href="<?= base_url('index.php/Mahasiswa') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Form End -->
