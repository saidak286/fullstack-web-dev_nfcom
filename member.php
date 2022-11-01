<?php error_reporting(0);
//ciptakan object dari class Member
$model = new Member();
//panggil fungsi untuk menampilkan data member
$data_member = $model->dataMember();
//beri session untuk hak akses halaman member
$sesi = $_SESSION['MEMBER'];
if (isset($sesi) && $sesi['role'] == 'admin') {
?>
    <section class="single-page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Daftar Member</h2>
                    <nav aria-label="breadcrumb mx-auto" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.php?hal=home">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Daftar Member</li>
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
                    <a class="btn btn-primary btn-sm" href="index.php?hal=member_edit" role="button" title="Tambah Member">
                        &nbsp;<i class="fa fa-plus" aria-hidden="true"></i>&nbsp;
                    </a>
                    <br /><br />
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">NIP</th>
                                <th scope="col">Fullname</th>
                                <th scope="col">Email</th>
                                <th scope="col">Username</th>
                                <th scope="col">Role</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($data_member as $row) {
                            ?>
                                <tr>
                                    <th scope="row"><?= $no ?></th>
                                    <td><?= $row['nip'] ?></td>
                                    <td><?= $row['fullname'] ?></td>
                                    <td><?= $row['email'] ?></td>
                                    <td><?= $row['username'] ?></td>
                                    <td><?= $row['role'] ?></td>
                                    <td>
                                        <form action="member_controller.php" method="POST">
                                            <a href="index.php?hal=member_edit&idedit=<?= $row['id'] ?>">
                                                <button type="button" class="btn btn-warning btn-sm" title="Ubah Member">
                                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                </button>
                                            </a>
                                            <button type="submit" class="btn btn-danger btn-sm" name="proses" value="hapus" onclick="return confirm('Anda Yakin Data akan diHapus?')" title="Hapus Member">
                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                            </button>
                                            <input type="hidden" name="idx" value="<?= $row['id'] ?>">
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
<?php
} else {
    echo '<script>alert("Anda Terlarang Akses Halaman Ini!!!");history.back();</script>';
}
?>