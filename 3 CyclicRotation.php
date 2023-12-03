<?php

function solution($A, $K) {
    
    // jika array kosong iterasi gagal
    if(empty($A)){
        return false;
    }

    $lenght = count($A);
    $B = [];

    // validator if N or K is not integer then blank
    if ((!is_integer($lenght) || ($lenght < 0 || $lenght > 100)) ||
        (!is_integer($K) || ($K < 0 || $K > 100)))  
    {
        return [];
    }

    // ambil element terakir ke array baru
    while ($K > 0) {
        $lastElements = $A[$lenght-1];
        $B[0] = $lastElements;
        
        // store setiap element sisanya ke array baru selain terakhir yang sudah diambil
        for ($i=0; $i < $lenght-1; $i++) { 
            $B[] = $A[$i];

        }

        // reset array awal menjadi isi dari array baru dan yang baru jadi kosong
        $A = $B;
        $B = [];
        $K--;

    }

    return $A;
}


print_r(solution([3,4,5,7,6],3));