<?php
class Inventaris
{
    //member1 variabel
    private $koneksi;
    //member2 konstruktor untuk koneksi database
    public function __construct()
    {
        global $dbh; //panggil instance object di koneksi.php 
        $this->koneksi = $dbh;
    }
    //member3 method2 CRUD
    public function dataInventaris()
    {
        $sql = "SELECT p.nip, p.nama, p.gender, b.kode_barang, b.nama as barang, i.lokasi, i.tanggal, i.jumlah, i.keterangan
                FROM inventaris i
                INNER JOIN pegawai p ON p.id = i.pegawai_id
                INNER JOIN barang b ON b.id = i.barang_id";
        //$data_inventaris = $dbh->query($sql);
        //menggunakan mekanisme prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }
}
