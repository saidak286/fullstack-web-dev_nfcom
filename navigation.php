<?php
$sesi = $_SESSION['MEMBER'];
?>
<!--
Fixed Navigation
==================================== -->
<section class="header navigation fixed-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="index.php?hal=home">
                        <img src="images/logo-inventory.png" alt="logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="tf-ion-android-menu"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navigation">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?hal=home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?hal=about">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?hal=inventaris">Inventaris</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?hal=contact">Contact</a>
                                <?php if (!isset($sesi)) { //---------jika belum/gagal login-----------
                                ?>
                            <li class="nav-item">
                                <a class="nav-link" href="login.php">Login</a>
                            </li>
                        <?php } else { //---------jika berhasil login-----------
                        ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Pages
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="index.php?hal=pegawai">Pegawai</a>
                                    <a class="dropdown-item" href="index.php?hal=barang">Barang</a>
                                    <a class="dropdown-item" href="index.php?hal=permintaan">Permintaan</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <?= $sesi['fullname'] ?></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <?php
                                    if ($sesi['role'] == 'admin') { //---------hanya untuk admin----------
                                    ?>
                                        <a class="dropdown-item" href="index.php?hal=member">Kelola User</a>
                                    <?php } ?>
                                    <a class="dropdown-item" href="logout.php">Logout</a>
                                </div>
                            </li>
                        <?php } ?>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</section>