<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-center text-gray-800">
        <?php echo $judul; ?>
    </h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">
                    Form Tambah Data Bantuan
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama">
                            <?php echo form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="nik">NIK</label>
                            <input type="text" name="nik" class="form-control" id="nik" placeholder="NIK">
                            <?php echo form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                <option value="">Jenis Kelamin</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                            <?php echo form_error('jenis_kelamin', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="jenis_bantuan">Jenis Bantuan</label>
                            <input type="text" name="jenis_bantuan" class="form-control" id="jenis_bantuan" placeholder="Jenis Bantuan">
                        </div>
                        <div class="form-group">
                            <label for="no_hp">No HP</label>
                            <input type="text" name="no_hp" class="form-control" id="no_hp" placeholder="No HP">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat">
                        </div>
                        <div class="text-center">
                            <button type="submit" name="tambah" class="btn btn-primary">Tambah Data Calon Bantuan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
