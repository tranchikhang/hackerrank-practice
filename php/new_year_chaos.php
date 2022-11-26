<?php

function minimumBribes($q) {
    // Write your code here
    $res = 0;
    $flg = false;
    for ($i=0 ; $i< count($q) - 1; $i++) {
        if ($q[$i] > $i + 1 + 2) {
            echo 'Too chaotic' . PHP_EOL;
            $flg = true;
            break;
        } else {
            if ($q[$i] > $i + 1) {
                $res += $q[$i] - ($i + 1) ;
            } else {
                for ($j=$i + 1 ; $j < count($q) ; $j++) {
                    if ( $q[$j] < $q[$i]) {
                        $res += 1;
                    }
                }
            }
        }
    }
    if (!$flg) {
        echo $res . PHP_EOL;
    }
}

function minimumBribes($q) {
    // Write your code here
    $res = 0;
    $flg = false;
    for ($i=0 ; $i< count($q); $i++) {
        if ($q[$i] > $i + 1 + 2) {
            echo 'Too chaotic' . PHP_EOL;
            $flg = true;
            break;
        } else {
            $start = 0;
            if ($q[$i] - 2 > 0) {
                $start = $q[$i] - 2;
            }
            for ($j=$start ; $j < $i ; $j++) {
                if ( $q[$j] > $q[$i]) {
                    $res += 1;
                }
            }
        }
    }
    if (!$flg) {
        echo $res . PHP_EOL;
    }
}
