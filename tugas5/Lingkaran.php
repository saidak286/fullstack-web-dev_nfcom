<?php
class Lingkaran
{
    public $r;

    public function namaBidang()
    {
        return "Lingkaran";
    }
    public function luasBidang($r)
    {
        $L = 3.14 * $r * $r;
        return $L;
    }
    public function kelilingBidang($r)
    {
        $K = 2 * 3.14 * $r;
        return $K;
    }
}
