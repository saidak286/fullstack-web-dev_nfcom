<?php error_reporting(0);
//ciptakan object dari class Pegawai
$model = new Pegawai();
//panggil fungsi untuk menampilkan data pegawai
$data_pegawai = $model->dataPegawai();
?>
<section class="single-page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Daftar Pegawai</h2>
                <nav aria-label="breadcrumb mx-auto" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.php?hal=home">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Daftar Pegawai</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="service-list section bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a class="btn btn-primary btn-sm" href="index.php?hal=pegawai_edit" role="button" title="Tambah Pegawai">
                    &nbsp;<i class="fa fa-plus" aria-hidden="true"></i>&nbsp;
                </a>
                <br /><br />
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">NIP</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jabatan</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Telepon</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($data_pegawai as $row) {
                        ?>
                            <tr>
                                <th scope="row"><?= $no ?></th>
                                <td><?= $row['nip'] ?></td>
                                <td><?= $row['nama'] ?></td>
                                <td><?= $row['jabatan'] ?></td>
                                <td><?= $row['gender'] ?></td>
                                <td><?= $row['alamat'] ?></td>
                                <td><?= $row['telepon'] ?></td>
                                <td>
                                    <form action="pegawai_controller.php" method="POST">
                                        <a href="index.php?hal=pegawai_detail&id=<?= $row['id'] ?>">
                                            <button type="button" class="btn btn-info btn-sm" title="Detail Pegawai">
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </a>
                                        <a href="index.php?hal=pegawai_edit&idedit=<?= $row['id'] ?>">
                                            <button type="button" class="btn btn-warning btn-sm" title="Ubah Pegawai">
                                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                            </button>
                                        </a>
                                        <?php
                                        if ($sesi['role'] != 'staff') {
                                        ?>
                                            <button type="submit" class="btn btn-danger btn-sm" name="proses" value="hapus" onclick="return confirm('Anda Yakin Data akan diHapus?')" title="Hapus Pegawai">
                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                            </button>
                                            <input type="hidden" name="idx" value="<?= $row['id'] ?>">
                                        <?php } ?>
                                    </form>
                                </td>
                            </tr>
                        <?php
                            $no++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>