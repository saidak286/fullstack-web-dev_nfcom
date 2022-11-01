<?php error_reporting(0);
//ciptakan object dari class Pegawai
$model = new Permintaan();
//panggil fungsi untuk menampilkan data Permintaan
$data_permintaan = $model->dataPermintaan();
/*
foreach ($data_Permintaan as $row) {
    print $row['nip'] . "\t";
    print $row['nama'] . "\t";
    print $row['alamat'] . "\n";
}
*/
?>
<section class="single-page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Daftar Permintaan</h2>
                <nav aria-label="breadcrumb mx-auto" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.php?hal=home">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Daftar Permintaan</li>
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
                <a class="btn btn-primary btn-sm" href="index.php?hal=permintaan_edit" role="button" title="Tambah Pegawai">
                    &nbsp;<i class="fa fa-plus" aria-hidden="true"></i>&nbsp;
                </a>
                <br /><br />
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Kode</th>
                            <th scope="col">NIP</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jabatan</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Barang</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($data_permintaan as $row) {
                        ?>
                            <tr>
                                <th scope="row"><?= $no ?></th>
                                <td><?= $row['kode_permintaan'] ?></td>
                                <td><?= $row['nip'] ?></td>
                                <td><?= $row['nama'] ?></td>
                                <td><?= $row['jabatan'] ?></td>
                                <td><?= $row['gender'] ?></td>
                                <td><?= $row['barang'] ?></td>
                                <td><?= $row['tanggal'] ?></td>
                                <td><?= $row['jumlah'] ?></td>
                                <td>
                                    <form action="permintaan_controller.php" method="POST">
                                        <a href="index.php?hal=permintaan_edit&idedit=<?= $row['id'] ?>">
                                            <button type="button" class="btn btn-warning btn-sm" title="Ubah permintaan">
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