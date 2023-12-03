<?php

function solutions($A) {

    if (empty($A)) {
        return 0;
    }

    $N = count($A);
    if ($N< 2 || $N > 1000) {
        return 0;
    }

    $left = $A[0];
    $right = array_sum($A) - $left;
    $sum = abs($left - $right);

    for ($i=1; $i < $N-1 ; $i++) { 
        
        $left += $A[$i];
        $right -= $A[$i];

        $sumB = abs($left - $right);

        if ($A[$i] < -abs(1000) || $A[$i] > 1000) {
            return 0;
        }

        if ($sum > $sumB) {
            $sum = $sumB;
        }
    }

    return $sum;

}

print_r(solutions([3,1,2,4,3]));