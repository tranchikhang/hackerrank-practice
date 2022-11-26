<?php

// Complete the minimumSwaps function below.
function minimumSwaps($arr) {
    $res = 0;
    for ($i = 0 ; $i < count($arr) ; $i++) {
        if ($i+1 != $arr[$i]) {
            for ($j = $i+1 ; $j < count($arr) ; $j++) {
                if ($arr[$j] == $i+1) {
                    // switch
                    $val = $arr[$i];
                    $arr[$i] = $arr[$j];
                    $arr[$j] = $val;
                    $res += 1;
                }
            }
        }
    }
    return $res;

}


function minimumSwaps($arr) {
    $res = 0;
    $map = [];
    for ($i = 0 ; $i < count($arr) ; $i++) {
        $map[$arr[$i]] = $i;
    }
    for ($i = 0 ; $i < count($arr) ; $i++) {
        if ($i+1 != $arr[$i]) {
            $position = $map[$i+1];
            $val = $arr[$i]; // 3
            $arr[$i] = $arr[$position]; // 2
            $arr[$position] = $val; // 3
            $res += 1;
            // update map
            $map[$arr[$i]] = $i;
            $map[$val] = $position;
        }
    }
    return $res;
}
