<?php
include_once 'koneksi.php';
include_once 'models/Pegawai.php';
//step 1 tangkap request form
$nip = $_POST['nip'];
$nama = $_POST['nama'];
$gender = $_POST['gender'];
$foto = $_POST['foto'];
$jabatan = $_POST['jabatan'];
$telepon = $_POST['telepon'];
$alamat = $_POST['alamat'];
//step 2 simpan ke array
$data = [
    $nip, // ? 1
    $nama, // ? 2
    $gender, // ? 3
    $foto, // ? 4
    $jabatan, // ? 5
    $telepon, // ? 7
    $alamat // ? 7
];
//step 3 eksekusi tombol dengan mekanisme PDO
$model = new Pegawai();
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
        header('Location:index.php?hal=pegawai');
        break;
}
//step 4 diarahkan ke suatu halaman, jika sudah selesai prosesnya
header('Location:index.php?hal=pegawai');
