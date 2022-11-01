<?php
class Permintaan
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
    public function dataPermintaan()
    {
        $sql = "SELECT pmt.*, pw.nip, pw.nama, pw.jabatan, pw.gender, br.nama AS barang
                FROM permintaan pmt
                INNER JOIN pegawai pw ON pw.id = pmt.pegawai_id
                INNER JOIN barang br ON br.id = pmt.barang_id;";
        //menggunakan mekanisme prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }
    public function getPermintaan($id)
    {
        $sql = "SELECT pmt.*, pw.nip, pw.nama, pw.jabatan, pw.gender, br.nama AS barang
                FROM permintaan pmt
                INNER JOIN pegawai pw ON pw.id = pmt.pegawai_id
                INNER JOIN barang br ON br.id = pmt.barang_id
                WHERE pmt.id = ?";
        //menggunakan mekanisme prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetch();
        return $rs;
    }
    public function simpan($data)
    {
        $sql = "INSERT INTO permintaan (kode_permintaan, pegawai_id, barang_id, tanggal, jumlah) VALUES (?,?,?,?,?)";
        //menggunakan mekanisme prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
    public function ubah($data)
    {
        $sql = "UPDATE permintaan SET kode_permintaan=?, pegawai_id=?, barang_id=?, tanggal=?, jumlah=? WHERE id=?";
        //menggunakan mekanisme prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
    public function hapus($id)
    {
        $sql = "DELETE FROM permintaan WHERE id=?";
        //menggunakan mekanisme prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
    }
}
