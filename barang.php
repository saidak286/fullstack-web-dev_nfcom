<?php
//ciptakan object dari class Divisi
$model = new Barang();
//panggil fungsi untuk menampilkan data barang
$data_barang = $model->dataBarang();
?>
<section class="single-page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Daftar Barang</h2>
                <nav aria-label="breadcrumb mx-auto" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.php?hal=home">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Daftar Barang</li>
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
                <a class="btn btn-primary btn-sm" href="index.php?hal=barang_edit" role="button" title="Tambah Barang">
                    &nbsp;<i class="fa fa-plus" aria-hidden="true"></i>&nbsp;
                </a>
                <br /><br />
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Kode</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Kondisi</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($data_barang as $row) {
                        ?>
                            <tr>
                                <th scope="row"><?= $no ?></th>
                                <td><?= $row['kode_barang'] ?></td>
                                <td><?= $row['nama'] ?></td>
                                <td><?= $row['kondisi'] ?></td>
                                <td><?= $row['jumlah'] ?></td>
                                <td>
                                    <form action="barang_controller.php" method="POST">
                                        <a href="index.php?hal=barang_edit&idedit=<?= $row['id'] ?>">
                                            <button type="button" class="btn btn-warning btn-sm" title="Ubah Barang">
                                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                            </button>
                                        </a>
                                        <?php
                                        if ($sesi['role'] != 'staff') {
                                        ?>
                                            <button type="submit" class="btn btn-danger btn-sm" name="proses" value="hapus" onclick="return confirm('Anda Yakin Data akan diHapus?')" title="Hapus Barang">
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