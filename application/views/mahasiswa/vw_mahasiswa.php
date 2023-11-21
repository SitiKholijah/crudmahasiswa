<!-- **********************************
      Content body start
*********************************** -->
<div class="content-body">
    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Mahasiswa</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
            </ol>
        </div>
    </div>

    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
        <div class="row">
            <div class="col-md-6">
                <a href="<?= base_url() ?>index.php/Mahasiswa/tambah" class="btn btn-info mb-2">Tambah Mahasiswa</a>
            </div>
        </div>
        <div class="col-md-12">
            <?= $this->session->flashdata('message');?>
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>NIM</th>
                        <th>Email</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php $i = 1; ?>
                    <?php foreach ($mahasiswa as $us): ?>
                        <tr>
                            <td>
                                <?= $i ?>.
                            </td>
                            <td><?= $us['nama']; ?></td>
                            <td><?= $us['nim']; ?></td>
                            <td><?= $us['email']; ?></td>
                            <td>
                                <a href="<?= base_url('index.php/Mahasiswa/hapus/') . $us['id']; ?>
                                "class="btn btn-danger">Hapus</a>
                                <a href="<?= base_url('index.php/Mahasiswa/edit/') . $us['id']; ?>
                                "class="btn btn-warning">Edit</a>
                                <a href="<?= base_url('index.php/Mahasiswa/detail/') . $us['id']; ?>
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
