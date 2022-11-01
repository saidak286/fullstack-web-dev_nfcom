<?php
include_once 'koneksi.php';
include_once 'models/Member.php';
// step 1 tangkap request form
$pegawai_id = $_POST['pegawai_id'];
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];
$foto = $_POST['foto'];
// step 2 simpan ke array
$data = [
    $pegawai_id, // ? 1
    $fullname, // ? 2
    $email, // ? 3
    $username, // ? 4
    $password, // ? 5
    $role, // ? 6
    $foto // ? 7
];
//step 3 proses otentikasi user
$model = new Member();
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
        header('Location:index.php?hal=member');
        break;
}
//step 4 diarahkan ke suatu halaman, jika sudah selesai prosesnya
header('Location:index.php?hal=member');
