<?php error_reporting(0);
//ciptakan object dari class permintaan
$obj_permintaan = new Permintaan();
$obj_barang = new Barang();
$obj_pegawai = new Pegawai();
//panggil fungsi untuk menampilkan data pegawai & barang
$data_pegawai = $obj_pegawai->dataPegawai();
$data_barang = $obj_barang->dataBarang();

//------------proses edit data------------
//tangkap request idedit di url (setelah klik tombol edit/icon pencil)
$idedit = $_REQUEST['idedit'];
$per = !empty($idedit) ? $obj_permintaan->getPermintaan($idedit) : array();
?>
<section class="single-page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Input Permintaan</h2>
                <nav aria-label="breadcrumb mx-auto" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.php?hal=home">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Input Permintaan</li>
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
                <form action="permintaan_controller.php" method="POST" class="row">
                    <div class="col-md-6 mt-2 mt-2">
                        <label class="form-label"><b>Kode</b></label>
                        <input type="text" class="form-control main" name="kode_permintaan" id="kode_permintaan" placeholder="Kode permintaan" value="<?= $per['kode_permintaan'] ?>">
                    </div>
                    <div class="col-md-6 mt-2 mt-2">
                        <label class="form-label"><b>Pegawai Id</b></label>
                        <input type="text" class="form-control main" name="pegawai_id" id="pegawai_id" placeholder="Pegawai Id" value="<?= $per['pegawai_id'] ?>">
                    </div>
                    <div class="col-md-6 mt-2">
                        <label class="form-label"><b>Barang Id</b></label>
                        <input type="text" class="form-control main" name="barang_id" id="barang_id" placeholder="Barang Id" value="<?= $per['barang_id'] ?>">
                    </div>

                    <div class="col-md-6 mt-2">
                        <label class="form-label"><b>Tanggal</b></label>
                        <input type="date" class="form-control main" name="tanggal" id="tanggal" value="<?= $per['tanggal'] ?>">
                    </div>
                    <div class="col-md-6 mt-2">
                        <label class="form-label"><b>Jumlah</b></label>
                        <input type="number" name="jumlah" id="jumlah" class="form-control main" rows="10" placeholder="Jumlah" value="<?= $per['jumlah'] ?>">
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