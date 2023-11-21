<!-- Form Start -->
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-6 mx-auto">
            <div class="bg-light rounded p-4 mt-4">
                <h4 class="mb-4 text-center">Form Ubah Data Mahasiswa</h4>
                <form action="" method="POST">
                    <input type="hidden" name="id" value="<?= $mahasiswa['id']; ?>">
                    
                    <div class="form-floating mb-3">
                        <label for="nama">Nama Mahasiswa</label>
                        <input type="text" class="form-control" id="nama" name="nama"
                            value="<?= $mahasiswa['nama']; ?>" placeholder="">
                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    
                    <div class="form-floating mb-3">
                        <label for="nim">NIM Mahasiswa</label>
                        <input type="text" class="form-control" id="nim" name="nim"
                            value="<?= $mahasiswa['nim']; ?>" placeholder="">
                        <?= form_error('nim', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    
                    <div class="form-floating mb-3">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="jenis_kelamin"class="form-control">
                            <option value="Laki-Laki"<?php if ($mahasiswa['jenis_kelamin'] == "Laki-laki"){
                                echo "selected";
                            } ?>>Laki-laki</option>
                            <option value="Perempuan"<?php if ($mahasiswa['jenis_kelamin'] == "Perempuan"){
                                echo "selected";
                            } ?>>Perempuan</option>
                            </select>
                    
                    <div class="form-floating mb-3">
                        <label for="email">Email Mahasiswa</label>
                        <input type="text" class="form-control" id="email" name="email"
                            value="<?= $mahasiswa['email']; ?>" placeholder="">
                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    
                    <div class="form-floating mb-3">
                    <label for="prodi">Program Studi</label>
                        <select class="form-select" id="prodi" name="prodi">
                            <?php foreach ($prodi as $p) :?>
                                <option value="<?= $p['id']; ?>" <?php if($mahasiswa['prodi']==$p['id']){
                                    echo "selected";
                                }?>><?=$p['nama']; ?></option>
                                <?php endforeach; ?>
                        </select>
                    </div>
                    
                    <div class="form-floating mb-3">
                        <label for="asal_sekolah">Asal Sekolah</label>
                        <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah"
                            value="<?= $mahasiswa['asal_sekolah']; ?>" placeholder="">   
                    </div>
                    
                    <div class="form-floating mb-3">
                        <label for="no_hp">No HP</label>
                        <input type="text" class="form-control" id="no_hp" name="no_hp"
                            value="<?= $mahasiswa['no_hp']; ?>" placeholder="">                        
                    </div>
                    
                    <div class="form-floating mb-3">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat"
                            value="<?= $mahasiswa['alamat']; ?>" placeholder="">                        
                    </div>
                    
                    <div class="text-center">
                        <a href="<?= base_url('index.php/Mahasiswa')?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Form End -->
