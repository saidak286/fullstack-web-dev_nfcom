<?php error_reporting(0);
//ciptakan object dari class member & pegawai
$obj_member = new Member();
$obj_pegawai = new Pegawai();
//panggil fungsi untuk menampilkan data pegawai
$data_pegawai = $obj_pegawai->dataPegawai();
// $data_divisi = $obj_divisi->dataDivisi();

//------------proses edit data------------
//tangkap request idedit di url (setelah klik tombol edit/icon pencil)
$idedit = $_REQUEST['idedit'];
$mem = !empty($idedit) ? $obj_member->getMember($idedit) : array();
?>
<section class="single-page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Input Member</h2>
                <nav aria-label="breadcrumb mx-auto" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.php?hal=home">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Input Member</li>
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
                <form action="member_controller.php" method="POST" class="row">
                    <div class="col-md-6 mt-2 mt-2">
                        <label class="form-label"><b>Pegawai Id</b></label>
                        <input type="number" class="form-control main" name="pegawai_id" id="pegawai_id" placeholder="Pegawai Id" value="<?= $mem['pegawai_id'] ?>">
                    </div>
                    <div class="col-md-6 mt-2">
                        <label class="form-label"><b>Fullname</b></label>
                        <input type="text" class="form-control main" name="fullname" id="fullname" placeholder="Fullname" value="<?= $mem['fullname'] ?>">
                    </div>
                    <div class="col-md-6 mt-2">
                        <label class="form-label"><b>Email</b></label>
                        <input type="text" class="form-control main" name="email" id="email" placeholder="Email" value="<?= $mem['email'] ?>">
                    </div>
                    <div class="col-md-6 mt-2">
                        <label class="form-label"><b>Username</b></label>
                        <input type="text" class="form-control main" name="username" id="username" placeholder="Username" value="<?= $mem['username'] ?>">
                    </div>
                    <div class="col-md-6 mt-2">
                        <label class="form-label"><b>Password</b></label>
                        <input type="text" class="form-control main" name="password" id="password" placeholder="Password" value="<?= $mem['password'] ?>">
                    </div>
                    <div class="col-md-6 mt-2">
                        <label class="form-label"><b>Foto</b></label>
                        <input type="text" class="form-control main" name="foto" id="foto" placeholder="Foto" value="<?= $mem['foto'] ?>">
                    </div>
                    <div class="col-md-12 mt-2">
                        <label class="form-label"><b>Role</b></label>
                        <?php
                        $ar_role = ['admin' => 'admin', 'manager' => 'manager', 'staff' => 'staff'];
                        foreach ($ar_role as $k => $jk) {
                            //proses edit role
                            $cek = $peg['role'] == $k ? 'checked' : '';
                        ?>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="role" value="<?= $k ?>" <?= $cek ?>>
                                <label class="form-check-label"><?= $jk ?></label>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="col-12 text-center mt-5">
                        <?php
                        //----------modus entri data baru, form dlm keadaan kosong-------------
                        if (empty($idedit)) {
                        ?>
                            <button type="submit" name="proses" value="simpan" class="btn btn-success btn-lg">Simpan</button>
                        <?php
                        }
                        //----------modus edit data lama, form terisi data lama -------------
                        else {
                        ?>
                            <button type="submit" name="proses" value="ubah" class="btn btn-warning btn-lg">Ubah</button>
                            <!-- hidden field untuk klausa where id=? -->
                            <input type="hidden" name="idx" value="<?= $idedit ?>">
                        <?php } ?> <button type=" submit" name="proses" value="batal" class="btn btn-info btn-lg">
                            Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>