<?php
class Pegawai
{
    public $nip;
    public $nama;
    public $jabatan;
    public $agama;
    public $status;

    public function __construct($nip, $nama, $jabatan, $agama, $status)
    {
        $this->nip = $nip;
        $this->nama = $nama;
        $this->jabatan = $jabatan;
        $this->agama = $agama;
        $this->status = $status;
    }
    public function setGajiPokok()
    {
        switch ($this->jabatan) {
            case 'Manager':
                $gapok = 15000000;
                break;
            case 'Asisten Manager':
                $gapok = 10000000;
                break;
            case 'Kepala Bagaian':
                $gapok = 7000000;
                break;
            case 'Staff':
                $gapok = 4000000;
                break;
            default:
                $gapok = 0;
        }
        return $gapok;
    }
    public function setTunjab()
    {
        $tunjab = $this->setGajiPokok() * 0.2;
        return $tunjab;
    }
    public function setTunkel()
    {
        $tunkel = ($this->status == 'Menikah') ? 0.1 * $this->setGajiPokok() : 0;
        return $tunkel;
    }
    public function setGajiKotor()
    {
        $gator = $this->setGajiPokok() + $this->setTunjab() + $this->setTunkel();
        return $gator;
    }
    public function setZakatProfesi()
    {
        $zaprof = ($this->agama == 'Islam' && $this->setGajiKotor() > 6000000) ? 0.025 * $this->setGajiKotor() : 0;
        return $zaprof;
    }
    public function setGajiBersih()
    {
        $gasih = $this->setGajiKotor() - $this->setZakatProfesi();
        return $gasih;
    }
    public function mencetak()
    {
        echo '<br/>NIP: ' . $this->nip;
        echo '<br/>Nama Pegawai: ' . $this->nama;
        echo '<br/>Jabatan: ' . $this->jabatan;
        echo '<br/>Agama: ' . $this->agama;
        echo '<br/>Status: ' . $this->status;
        echo '<br/>Gaji Pokok: Rp. ' . number_format($this->setGajiPokok());
        echo '<br/>Tunjangan Jabatan: Rp. ' . number_format($this->setTunjab());
        echo '<br/>Tunjangan Keluarga: Rp. ' . number_format($this->setTunkel());
        echo '<br/>Zakat Profesi: Rp. ' . number_format($this->setZakatProfesi());
        echo '<br/>Gaji Bersih: Rp. ' . number_format($this->setGajiBersih());
        echo '<hr/>';
    }
}
