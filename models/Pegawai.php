<?php
class Pegawai
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
    public function dataPegawai()
    {
        $sql = "SELECT * FROM pegawai";
        //$data_pegawai = $dbh->query($sql);
        //menggunakan mekanisme prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }
    public function getPegawai($id)
    {
        $sql = "SELECT * FROM pegawai WHERE pegawai.id = ?";
        //menggunakan mekanisme prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetch();
        return $rs;
    }
    public function simpan($data)
    {
        $sql = "INSERT INTO pegawai (nip, nama, jabatan, gender, alamat, telepon, foto) VALUES (?,?,?,?,?,?,?)";
        //menggunakan mekanisme prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
    public function ubah($data)
    {
        $sql = "UPDATE pegawai SET nip=?, nama=?, jabatan=?, gender=? alamat=?, telepon=?, foto=? WHERE id=?";
        //menggunakan mekanisme prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
    public function hapus($id)
    {
        $sql = "DELETE FROM pegawai WHERE id=?";
        //menggunakan mekanisme prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
    }
}
