<?php
include_once 'koneksi.php';
include_once 'models/Barang.php';
//step 1 tangkap request form
$kode_barang = $_POST['kode_barang'];
$nama = $_POST['nama'];
$kondisi = $_POST['kondisi'];
$jumlah = $_POST['jumlah'];
//step 2 simpan ke array
$data = [
    $kode_barang, // ? 1
    $nama, // ? 2
    $jumlah, // ? 3
    $kondisi, // ? 4
];
//step 3 eksekusi tombol dengan mekanisme PDO
$model = new Barang();
$tombol = $_REQUEST['proses'];
switch ($tombol) {
    case 'simpan':
        $model->simpan($data);
        break;

    case 'ubah':
        //tangkap hidden field idx untuk klausa where id
        // ? 10 (klausa where id = ?)
        $data[] = $_POST['idx'];
        $model->ubah($data);
        break;

    case 'hapus':
        unset($data); //hapus 9 ? di atas
        //panggil method hapus data disertai tangkap hidden filed idx untuk klausa where id
        $model->hapus($_POST['idx']);
        break;

    default:
        header('Location:index.php?hal=barang');
        break;
}
//step 4 diarahkan ke suatu halaman, jika sudah selesai prosesnya
header('Location:index.php?hal=barang');
