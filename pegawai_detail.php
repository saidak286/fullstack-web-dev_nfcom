<?php error_reporting(0);
//tangkap request id dari klik tombol detail
$id = $_REQUEST['id'];
//ciptakan object dari class Pegawai
$model = new Pegawai();
//panggil fungsi untuk menampilkan data pegawai
$pegawai = $model->getPegawai($id);
?>
<section class="single-page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Detail Pegawai</h2>
                <nav aria-label="breadcrumb mx-auto" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.php?hal=home">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Detail Pegawai</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="service-list section bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-6 align-self-md-center">
                <div class="image-block">
                    <img src="images/pegawai/<?= $pegawai['foto'] ?>" class="img-fluid" alt="pegawai">
                </div>
            </div>
            <div class="col-lg-7 col-md-6 align-self-center">
                <div class="content-block">
                    <div class="name">
                        <h3><?= $pegawai['nama'] ?></h3>
                    </div>
                    <div class="profession">
                        <p><?= $pegawai['jabatan'] ?></p>
                    </div>
                    <div class="alert alert-secondary" role="alert">
                        <ul class="mr-1">
                            <li>Gender: <?= $pegawai['gender'] ?></li>
                            <li>Alamat: <?= $pegawai['alamat'] ?></li>
                            <li>Telepon: <?= $pegawai['telepon'] ?></li>
                        </ul>
                    </div>
                    <br />
                    <p align="right">
                        <a href="index.php?hal=pegawai" class="btn btn-primary" title="back">
                            <i class="fa fa-chevron-left" aria-hidden="true"></i>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>