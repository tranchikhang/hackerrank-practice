<?php

function divisibleSumPairs($n, $k, $arr) {
    // Write your code here
    $res = 0;
    for ($i=0 ; $i<count($arr) ; $i++) {
        for ($j=$i+1 ; $j<count($arr) ; $j++) {
            if (($arr[$i] + $arr[$j])%$k ==0) {
                $res +=1;
            }
        }
    }
    return $res;

}
