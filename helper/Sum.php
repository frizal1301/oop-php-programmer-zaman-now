<?php
namespace Helper;
class Sum {
    static public function tambah(int ...$number) : int {
        $total = 0;

        foreach($number as $n) {
            $total += $n;
        }
        return $total;
    }
}