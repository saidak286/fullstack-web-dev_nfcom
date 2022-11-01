<?php
include_once 'koneksi.php';
include_once 'models/Permintaan.php';
//step 1 tangkap request form
$kode_permintaan = $_POST['kode_permintaan'];
$nip = $_POST['nip'];
$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$gender = $_POST['gender'];
$barang = $_POST['barang'];
$tanggal = $_POST['tanggal'];
$jumlah = $_POST['jumlah'];
//step 2 simpan ke array
$data = [
    $nip, // ? 1
    $nama, // ? 2
    $gender, // ? 3
    $barang, // ? 4
    $jabatan, // ? 5
    $tanggal, // ? 7
    $jumlah // ? 7
];
//step 3 eksekusi tombol dengan mekanisme PDO
$model = new Permintaan();
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
        header('Location:index.php?hal=permintaan');
        break;
}
//step 4 diarahkan ke suatu halaman, jika sudah selesai prosesnya
header('Location:index.php?hal=permintaan');
