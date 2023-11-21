<!-- Content body start -->
<div class="content-body">
    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Prodi</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
            </ol>
        </div>
    </div>

    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
        <div class="row">
            <div class="col-md-6">
                <a href="<?= base_url() ?>index.php/Prodi/tambah" class="btn btn-info mb-2">Prodi</a>
            </div>
        </div>
        <div class="col-md-12">
        <?= $this->session->flashdata('message');?>
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Prodi</th>
                        <th>Ruang</th>
                        <th>Akreditasi</th>
                        <th>Nama Kaprodi</th>
                        <th>Tahun Berdiri</th>
                        <th>Output Lulusan</th>
                        <th>gambar</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($prodi as $us): ?>
                        <tr>
                            <td><?= $i ?>.</td>
                            <td><?= $us['nama']; ?></td>
                            <td><?= $us['ruangan']; ?></td>
                            <td><?= $us['akreditasi']; ?></td>
                            <td><?= $us['nama_kaprodi']; ?></td>
                            <td><?= $us['tahun_berdiri']; ?></td>
                            <td><?= $us['output_lulusan']; ?></td>
                            <td><img src="<?= base_url('assets/images/prodi/') . $us['gambar']; ?>" style="width: 100px;" class="img-thumbnail"></td>
                            <td>
                                <a href="<?= base_url('index.php/Prodi/hapus/') . $us['id']; ?>" class="btn btn-danger mb-2">Hapus</a>
                                <a href="<?= base_url('index.php/Prodi/edit/') . $us['id']; ?>" class="btn btn-warning">Edit</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Content body end -->

<div class="container-fluid">
    <!-- Add additional content if needed -->
</div>
<!-- #/ container -->
