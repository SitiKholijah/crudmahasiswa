<!-- **********************************
      Content body start
*********************************** -->
<div class="content-body">
    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Form Bantuan</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
            </ol>
        </div>
    </div>

    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
        <div class="row">
            <div class="col-md-6">
                <a href="<?= base_url() ?>index.php/Bantuan/tambah" class="btn btn-info mb-2">Tambah Bantuan</a>
            </div>
        </div>
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>NIK</th>
                        <th>Jenis Kelamin</th>
                        <th>Jenis Bantuan</th>
                        <th>No Hp</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php $i = 1; ?>
                    <?php foreach ($bantuan as $us): ?>
                        <tr>
                            <td>
                                <?= $i ?>.
                            </td>
                            <td><?= $us['nama']; ?></td>
                            <td><?= $us['nik']; ?></td>
                            <td><?= $us['jenis_kelamin']; ?></td>
                            <td><?= $us['jenis_bantuan']; ?></td>
                            <td><?= $us['no_hp']; ?></td>
                            <td><?= $us['alamat']; ?></td>

                            <td>
                                <a href="<?= base_url('index.php/Bantuan/hapus/') . $us['id']; ?>
                                "class="btn btn-danger">Hapus</a>
                                <a href="<?= base_url('index.php/Bantuan/edit/') . $us['id']; ?>
                                "class="btn btn-warning">Edit</a>
                                <a href="<?= base_url('index.php/Bantuan/detail/') . $us['id']; ?>
                                "class="btn btn-info">Detail</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- row -->

<div class="container-fluid">
    <!-- Add additional content if needed -->
</div>
<!-- #/ container -->
</div>
<!-- **********************************
      Content body end
*********************************** -->
