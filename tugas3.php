<?php
//array scalar (1 dimensi)
$m1 = ['nim' => 011214, 'nama' => 'Said', 'nilai' => 66];
$m2 = ['nim' => 011245, 'nama' => 'Al Khairi', 'nilai' => 91];
$m3 = ['nim' => 011026, 'nama' => 'Afifah', 'nilai' => 86];
$m4 = ['nim' => 011075, 'nama' => 'Devi', 'nilai' => 84];
$m5 = ['nim' => 011212, 'nama' => 'Muhammad', 'nilai' => 96];
$m6 = ['nim' => 011156, 'nama' => 'Amelia', 'nilai' => 76];
$m7 = ['nim' => 011277, 'nama' => 'Wiwin', 'nilai' => 81];
$m8 = ['nim' => 011126, 'nama' => 'Riko', 'nilai' => 54];
$m9 = ['nim' => 011004, 'nama' => 'Novian', 'nilai' => 48];
$m10 = ['nim' => 011176, 'nama' => 'Firman', 'nilai' => 71];

//array assosiative (> 1 dimensi)
$mahasiswa = [$m1, $m2, $m3, $m4, $m5, $m6, $m7, $m8, $m9, $m10];

$ar_judul = ['No', 'NIM', 'Nama', 'Nilai', 'Keterangan', 'Grade', 'Predikat'];

//aggregate function in array
$jumlah_m = count($mahasiswa);
$nilai = array_column($mahasiswa, 'nilai');
$total_nilai = array_sum($nilai);
$nilai_tertingi = max($nilai);
$nilai_terendah = min($nilai);
$nilai_rata2 = $total_nilai / $jumlah_m;
//keterangan
$keterangan = [
    'Nilai Tertinggi' => $nilai_tertingi,
    'Nilai Terendah' => $nilai_terendah,
    'Nilai Rata2' => $nilai_rata2,
    'Jumlah Mahasiswa' => $jumlah_m
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container px-3 my-3">
        <h3 class="text-center">Daftar Nilai Mahasiswa</h3>
        <table class="table align-middle text-center">
            <thead class="table-primary">
                <tr>
                    <?php
                    foreach ($ar_judul as $jdl) {
                    ?>
                        <th><?= $jdl ?></th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($mahasiswa as $siswa) {
                    //rumus2
                    $ket = ($siswa['nilai'] >= 60) ? "Lulus" : "Gagal";
                    //tentukan grade nilai
                    if ($siswa['nilai'] >= 85 && $siswa['nilai'] <= 100) $grade = 'A';
                    else if ($siswa['nilai'] >= 75 && $siswa['nilai'] < 85) $grade = 'B';
                    else if ($siswa['nilai'] >= 60 && $siswa['nilai'] < 75) $grade = 'C';
                    else if ($siswa['nilai'] >= 30 && $siswa['nilai'] < 60) $grade = 'D';
                    else if ($siswa['nilai'] >= 0 && $siswa['nilai'] < 30) $grade = 'E';
                    else $grade = '';
                    //tentukan predikat
                    switch ($grade) {
                        case 'A':
                            $predikat = 'Memuaskan';
                            break;
                        case 'B':
                            $predikat = 'Bagus';
                            break;
                        case 'C':
                            $predikat = 'Cukup';
                            break;
                        case 'D':
                            $predikat = 'Kurang';
                            break;
                        case 'E':
                            $predikat = 'Buruk';
                            break;
                        default:
                            $predikat = '';
                    }
                ?>
                    <tr>
                        <td><?= $no ?></td>
                        <td><?= $siswa['nim'] ?></td>
                        <td><?= $siswa['nama'] ?></td>
                        <td><?= $siswa['nilai'] ?></td>
                        <td><?= $ket ?></td>
                        <td><?= $grade ?></td>
                        <td><?= $predikat ?></td>
                    </tr>
                <?php $no++;
                } ?>
            </tbody>
            <tfoot>
                <?php
                foreach ($keterangan as $terang => $hasil) {
                ?>
                    <tr>
                        <td colspan="6"><?= $terang ?></td>
                        <td><?= $hasil ?></td>
                    </tr>
                <?php } ?>
            </tfoot>
        </table>
    </div>
</body>

</html>