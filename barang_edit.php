<?php error_reporting(0);
//ciptakan object dari class Barang
$obj_barang = new Barang();
//panggil fungsi untuk menampilkan data jabatan & divisi
// $data_jabatan = $obj_jabatan->dataJabatan();
// $data_divisi = $obj_divisi->dataDivisi();

//------------proses edit data------------
//tangkap request idedit di url (setelah klik tombol edit/icon pencil)
$idedit = $_REQUEST['idedit'];
$bar = !empty($idedit) ? $obj_barang->getBarang($idedit) : array();
?>
<section class="single-page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Input Barang</h2>
                <nav aria-label="breadcrumb mx-auto" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.php?hal=home">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Input Barang</li>
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
                <form action="barang_controller.php" method="POST" class="row">
                    <div class="col-md-6 mt-2 mt-2">
                        <label class="form-label"><b>Kode Barang</b></label>
                        <input type="text" class="form-control main" name="kode_barang" id="kode_barang" placeholder="Kode Barang" value="<?= $bar['kode_barang'] ?>">
                    </div>
                    <div class="col-md-6 mt-2">
                        <label class="form-label"><b>Nama</b></label>
                        <input type="text" class="form-control main" name="nama" id="nama" placeholder="Nama" value="<?= $bar['nama'] ?>">
                    </div>
                    <div class="col-md-12 mt-2">
                        <label class="form-label"><b>Kondisi</b></label>
                        <textarea name="kondisi" id="kondisi" class="form-control main" rows="10" placeholder="Kondisi"><?= $bar['kondisi'] ?></textarea>
                    </div>
                    <div class="col-md-12 mt-2">
                        <label class="form-label"><b>Jumlah</b></label>
                        <input type="number" name="jumlah" id="jumlah" class="form-control main" rows="10" placeholder="Jumlah" value="<?= $bar['jumlah'] ?>">
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