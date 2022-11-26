<?php

function getTotalX($a, $b) {
    // Write your code here
    $min = $a[count($a)-1];
    $max = $b[count($b)-1];
    $res = [];
    for($i=$min ; $i<=$max ; $i++) {
        $flg = true;
        foreach ($a as $first) {
            if ($i%$first!=0) {
                $flg = false;
                break;
            }
        }
        if ($flg) {
            foreach ($b as $second) {
                if ($second%$i!=0) {
                    $flg = false;
                    break;
                }
            }
        }
        if ($flg) {
            $res[] = $i;
        }
    }
    return count($res);
}
