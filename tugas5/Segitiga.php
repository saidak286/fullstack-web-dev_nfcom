<?php
class Segitiga
{
    public $a;
    public $b;
    public $c;
    public $t;

    public function namaBidang()
    {
        return "Segitiga";
    }
    public function luasBidang($a, $t)
    {
        $L = (0.5 * $a) * $t;
        return $L;
    }
    public function kelilingBidang($a, $b, $c)
    {
        $K = $a + $b + $c;
        return $K;
    }
}
