<?php
class PersegiPanjang
{
    public $p;
    public $l;

    public function namaBidang()
    {
        return "Persegi Panjang";
    }
    public function luasBidang($p, $l)
    {
        $L = $p * $l;
        return $L;
    }
    public function kelilingBidang($p, $l)
    {
        $K = 2 * ($p * $l);
        return $K;
    }
}
