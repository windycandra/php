<?php

function solution($A) {

    // Jika array kosong dan diatas 100000 hasil 1
    $N = count($A);
    if ($N < 1 || $N > 100000) {
        return 1;
    }

    sort($A);
    $X = 1;

    // jika nilai diluar range return 1
    foreach ($A as $B) {
        if ($B < -abs(100000) || $B > 100000) {
            return 1;
        }
        
        // jika temporary tidak ada data diarray tambah 1 untuk nilai terakhir
        if ($X == $B) {
           $X++;
        }

    }

    return $X;
}


print_r(solution([1,2,4]));