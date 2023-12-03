<?php

function solution($A)
{
    // jika array kosong iterasi gagal
    if(empty($A)){
        return 0;
    }
    
    $length = count($A);
    $duplicates = [];

    // validator N = ganjil && 1<x<1000000 then...
    if ($length %2 !== 0 && ($length >= 1 && $length <= 1000000)) {

        // cek pada setiap element
        for ($i=0; $i < $length; $i++) { 
        
            // validator element = integer && 1<x<100000000
             if(is_integer($A[$i]) && ($A[$i] >=1 && $A[$i]<= 10000000000)){
                
                // jika key element [] => X belum ada di array duplikat
               if (!array_key_exists($A[$i], $duplicates))
               {
                    // masukkan nilai ke element duplikat dan set nilai jadi 1 (tidak ganda)
                    $duplicates[$A[$i]] = 1;
               } else {
                    // jika ada set array duplikat jadi kosong
                    unset($duplicates[$A[$i]]);
                }
            }
        }
    }

    return key($duplicates);
}
print_r(solution([9,3,9,3,9,7,9]));