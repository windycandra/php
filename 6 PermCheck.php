<?php

function solution($A){

    if(empty($A)){
        return 0;
    }

    $N = count($A);
    if($N < 0 || $N > 10000) {
        return 0;
    }

    sort($A);
    $j = 1;
    $B = 0;
    for ($i=0; $i < $N ; $i++ , $j++) { 
        
        if ($j !== $A[$i] || ($B == $A[$i])) {
            return 0;
        }

        $B == $A[$i];
    
    }

   return 1;
}

print_r(solution([1,2,4,3]));