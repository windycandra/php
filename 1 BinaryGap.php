<?php

function solution($N) {

$gaps = [];

    // validator N = integer && 1<N<2147346457
    if (is_integer($N) && ($N >= 1 && $N<= 2147346457)) {

        // convert dec => binary and store
        $binary = decbin($N);
        $length = strlen($binary);
        $hasOne = false;
        $zeros = 0;

        for($i = 0; $i < $length; $i++) {

            if($binary[$i] == 1){
                
                // Jika ketemu 1 dan adalah pembuka set "ada 1"
                if(!$hasOne) {
                    $hasOne = true;
                    continue;
                }
                
                // store data 0 ke array gap, set ulang nilai jadi 0
                $gaps[] = $zeros;
                $zeros = 0;
                continue;

            }

            $zeros++;
        }
    }
 // jika array gap kosong iterasi gagal, 
 // jika ada isi return nilai maksimal array gap ([1,2,3,4,5] = 5)
 return(empty($gaps) ? 0 : max($gaps));
}

echo solution(1041);