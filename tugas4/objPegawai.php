<?php
require 'Pegawai.php';
//ciptakan object
$p1 = new Pegawai('011214', 'Said', 'Asisten Manager', 'Islam', 'Menikah');
$p2 = new Pegawai('011245', 'Al Khairi', 'Manager', 'Islam', 'Belum Menikah');
$p3 = new Pegawai('011026', 'Afifah', 'Asisten Manager', 'Islam', 'Belum Menikah');
$p4 = new Pegawai('011075', 'Devi', 'Asisten Manager', 'Hindu', 'Menikah');
$p5 = new Pegawai('011126', 'Riko', 'Asisten Manager', 'Kristen', 'Menikah');

echo '<h3 align="center">"Data Pegawai"</h3>';
$p1->mencetak();
$p2->mencetak();
$p3->mencetak();
$p4->mencetak();
$p5->mencetak();
