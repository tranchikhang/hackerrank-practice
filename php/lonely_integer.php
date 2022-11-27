<?php

/*
 * Complete the 'lonelyinteger' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER_ARRAY a as parameter.
 */

function lonelyinteger($array) {
    // Write your code here
    $map = [];
    foreach ($array as $ele) {
        if (array_key_exists(strval($ele), $map)) {
            unset($map[strval($ele)]);
        } else {
            $map[strval($ele)] = 1;
        }
    }
    return array_key_first($map);
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$a_temp = rtrim(fgets(STDIN));

$a = array_map('intval', preg_split('/ /', $a_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = lonelyinteger($a);

fwrite($fptr, $result . "\n");

fclose($fptr);
