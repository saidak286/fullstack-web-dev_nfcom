<?php error_reporting(0);
class Member
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
    public function dataMember()
    {
        $sql = "SELECT m.*, p.nip 
                FROM member m
                INNER JOIN pegawai p ON p.id = m.pegawai_id
                ORDER BY id ASC";
        //menggunakan mekanisme prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }
    public function getMember($id)
    {
        $sql = "SELECT m.*, p.nip 
                FROM member m
                INNER JOIN pegawai p ON p.id = m.pegawai_id 
                WHERE m.id = ?";
        //menggunakan mekanisme prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetch();
        return $rs;
    }
    public function simpan($data)
    {
        $sql = "INSERT INTO member (nip, fullname, email, username, password, role, foto) VALUES 
                (?,?,?,?,SHA1(MD5(SHA1(?))),?,?)";
        //menggunakan mekanisme prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
    public function ubah($data)
    {
        $sql = "UPDATE member SET nip=?, fullname=?, email=?, username=?, password=SHA1(MD5(SHA1(?))), role=?, foto=? 
                WHERE id=?";
        //menggunakan mekanisme prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
    public function hapus($id)
    {
        $sql = "DELETE FROM member WHERE id=?";
        //menggunakan mekanisme prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
    }
    public function cekLogin($data)
    {
        $sql = "SELECT * FROM member WHERE username = ? AND password = SHA1(MD5(SHA1(?)))";
        //menggunakan mekanisme prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
        $rs = $ps->fetch();
        return $rs;
    }
}
