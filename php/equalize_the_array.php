<?php

/*
 * Complete the 'equalizeArray' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function equalizeArray($arr) {
    // Write your code here
    $freq = [];
    $max = -1;
    foreach ($arr as $val) {
        if (array_key_exists($val, $freq)) {
            $freq[$val] += 1;
        } else {
            $freq[$val] = 1;
        }
        if ($freq[$val]>$max) {
            $max = $freq[$val];
        }
    }
    return count($arr) - $max;

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = equalizeArray($arr);

fwrite($fptr, $result . "\n");

fclose($fptr);
