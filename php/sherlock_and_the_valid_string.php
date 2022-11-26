<?php

function isValid($s) {
    // Write your code here
    $alphabet = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
    $res = [];
    for ($i=0 ; $i < count($alphabet) ; $i++) {
        $res[$alphabet[$i]] = 0;
    }
    for ($i=0 ; $i < strlen($s) ; $i++) {
        $res[$s[$i]] += 1;
    }
    $rmFlag = true;
    $freq = 0;
    foreach ($res as $i => $val) {
        if ($val == 0) {
            continue;
        }
        if ($freq == 0) {
            $freq = $val;
        } elseif ($val != $freq) {
            if ($rmFlag) {
                $rmFlag = false;
                continue;
            }
            return 'NO';
        }
    }
    return 'YES';
}
