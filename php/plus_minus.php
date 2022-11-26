<?php

/*
 * Complete the 'plusMinus' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function plusMinus($arr) {
    // Write your code here
    $plus = [];
    $minus = [];
    $zero = [];
    foreach ($arr as $n) {
        if ($n>0) {
            $plus[] = $n;
        } elseif ($n==0) {
            $zero[] = $n;
        } else {
            $minus[] = $n;
        }
    }
    echo number_format(count($plus)/count($arr), 6);
    echo PHP_EOL;
    echo number_format(count($minus)/count($arr), 6);
    echo PHP_EOL;
    echo number_format(count($zero)/count($arr), 6);

}

$n = intval(trim(fgets(STDIN)));

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

plusMinus($arr);
