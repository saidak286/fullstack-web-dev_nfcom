<?php error_reporting(0);
//ciptakan object dari class pegawai
$obj_pegawai = new Pegawai();
// $obj_divisi = new Divisi();
// $obj_pegawai = new Pegawai();
//panggil fungsi untuk menampilkan data jabatan & divisi
// $data_jabatan = $obj_jabatan->dataJabatan();
// $data_divisi = $obj_divisi->dataDivisi();

//------------proses edit data------------
//tangkap request idedit di url (setelah klik tombol edit/icon pencil)
$idedit = $_REQUEST['idedit'];
$peg = !empty($idedit) ? $obj_pegawai->getPegawai($idedit) : array();
?>
<section class="single-page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Input Pegawai</h2>
                <nav aria-label="breadcrumb mx-auto" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.php?hal=home">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Input Pegawai</li>
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
                <form action="pegawai_controller.php" method="POST" class="row">
                    <div class="col-md-6 mt-2 mt-2">
                        <label class="form-label"><b>NIP</b></label>
                        <input type="text" class="form-control main" name="nip" id="nip" placeholder="NIP" value="<?= $peg['nip'] ?>">
                    </div>
                    <div class="col-md-6 mt-2">
                        <label class="form-label"><b>Nama</b></label>
                        <input type="text" class="form-control main" name="nama" id="nama" placeholder="Nama" value="<?= $peg['nama'] ?>">
                    </div>
                    <div class="col-md-6 mt-2">
                        <label class="form-label"><b>Jabatan</b></label>
                        <input type="text" class="form-control main" name="jabatan" id="jabatan" placeholder="Jabatan" value="<?= $peg['jabatan'] ?>">
                    </div>
                    <div class="col-md-6 mt-2">
                        <label class="form-label"><b>Jenis Kelamin</b></label>
                        <?php
                        $ar_gender = ['L' => 'Laki-Laki', 'P' => 'Perempuan'];
                        foreach ($ar_gender as $k => $jk) {
                            //proses edit gender
                            $cek = $peg['gender'] == $k ? 'checked' : '';
                        ?>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" value="<?= $k ?>" <?= $cek ?>>
                                <label class="form-check-label"><?= $jk ?></label>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="col-md-12 mt-2">
                        <label class="form-label"><b>Alamat</b></label>
                        <textarea name="alamat" id="alamat" class="form-control main" rows="10" placeholder="Alamat"><?= $peg['alamat'] ?></textarea>
                    </div>
                    <div class="col-md-6 mt-2">
                        <label class="form-label"><b>Telepon</b></label>
                        <input type="text" class="form-control main" name="telepon" id="telepon" placeholder="+62" value="<?= $peg['telepon'] ?>">
                    </div>
                    <div class="col-md-6 mt-2">
                        <label class="form-label"><b>Foto</b></label>
                        <input type="text" class="form-control main" name="foto" id="foto" placeholder="Foto" value="<?= $peg['foto'] ?>">
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