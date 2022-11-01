<?php error_reporting(0);
//ciptakan object dari class Inventaris
$model = new Inventaris();
//panggil fungsi untuk menampilkan data Inventaris
$data_inventaris = $model->dataInventaris();
?>
<section class="single-page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Daftar Inventaris</h2>
                <nav aria-label="breadcrumb mx-auto" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.php?hal=home">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Daftar Inventaris</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="service-list section bg-gray">
    <div class="container">
        <div class="row">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <!-- <th scope="col">NIP</th> -->
                        <th scope="col">Nama</th>
                        <!-- <th scope="col">Gender</th> -->
                        <th scope="col">Kode</th>
                        <!-- <th scope="col">Barang</th> -->
                        <th scope="col">Lokasi</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Ket</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($data_inventaris as $row) {
                    ?>
                        <tr>
                            <th scope="row"><?= $no ?></th>
                            <!-- <td><?= $row['nip'] ?></td> -->
                            <td><?= $row['nama'] ?></td>
                            <!-- <td><?= $row['gender'] ?></td> -->
                            <td><?= $row['kode_barang'] ?></td>
                            <!-- <td><?= $row['barang'] ?></td> -->
                            <td><?= $row['lokasi'] ?></td>
                            <td><?= $row['tanggal'] ?></td>
                            <td><?= $row['jumlah'] ?></td>
                            <td><?= $row['keterangan'] ?></td>
                        </tr>
                    <?php
                        $no++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</section>