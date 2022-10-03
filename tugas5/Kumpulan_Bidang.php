<?php
require_once 'Lingkaran.php';
require_once 'Persegipanjang.php';
require_once 'Segitiga.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Daftar Luas dan Keliling Bidang</title>
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center">Luas dan Keliling Bidang</h1>
        <table class="table text-center table-bordered mt-5">
            <thead class="table-primary">
                <tr>
                    <th>No</th>
                    <th>Nama Bidang</th>
                    <th>Keterangan</th>
                    <th>Luas Bidang</th>
                    <th>Keliling Bidang</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $ling = new Lingkaran();
                $perpan = new Persegipanjang();
                $tiga = new Segitiga();

                echo '<tr><td>1</td>';
                echo '<td>' . $ling->namaBidang() . '</td>';
                echo '<td>Jari Jari = 10</td>';
                echo '<td>' . $ling->luasBidang(10) . '</td>';
                echo '<td>' . $ling->kelilingBidang(10) . '</td></tr>';
                echo '<tr><td>2</td>';
                echo '<td>' . $perpan->namaBidang() . '</td>';
                echo '<td>Panjang = 7, Lebar = 4</td>';
                echo '<td>' . $perpan->luasBidang(7, 4) . '</td>';
                echo '<td>' . $perpan->kelilingBidang(7, 4) . '</td></tr>';
                echo '<tr><td>3</td>';
                echo '<td>' . $tiga->namaBidang() . '</td>';
                echo '<td>Alas = 5, Tinggi = 2, Sisi1 = 5, Sisi2 = 5, Sisi3 = 5</td>';
                echo '<td>' . $tiga->luasBidang(5, 5) . '</td>';
                echo '<td>' . $tiga->kelilingBidang(5, 5, 5) . '</td></tr>';
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>
