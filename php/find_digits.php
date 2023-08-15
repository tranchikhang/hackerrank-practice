<?php

/*
 * Complete the 'findDigits' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER n as parameter.
 */

function findDigits($n) {
    // Write your code here
    $arr = str_split(strval($n));
    $cnt = 0;
    foreach ($arr as $d) {
        $d = intval($d);
        if ($d!=0 && $n%$d==0) {
            $cnt++;
        }
    }
    return $cnt;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$t = intval(trim(fgets(STDIN)));

for ($t_itr = 0; $t_itr < $t; $t_itr++) {
    $n = intval(trim(fgets(STDIN)));

    $result = findDigits($n);

    fwrite($fptr, $result . "\n");
}

fclose($fptr);
