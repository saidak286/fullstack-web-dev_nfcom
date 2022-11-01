<?php
class Barang
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
    public function dataBarang()
    {
        $sql = "SELECT * FROM barang";
        //menggunakan mekanisme prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }
    public function getBarang($id)
    {
        $sql = "SELECT * FROM barang WHERE barang.id = ?";
        //menggunakan mekanisme prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetch();
        return $rs;
    }
    public function simpan($data)
    {
        $sql = "INSERT INTO barang (kode-barang, nama, kondisi, jumlah) VALUES (?,?,?,?)";
        //menggunakan mekanisme prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
    public function ubah($data)
    {
        $sql = "UPDATE barang SET kode_barang=?, nama=?, kondisi=? jumlah=?,  WHERE id=?";
        //menggunakan mekanisme prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
    public function hapus($id)
    {
        $sql = "DELETE FROM barang WHERE id=?";
        //menggunakan mekanisme prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
    }
}
