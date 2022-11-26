<?php

/*
 * Complete the 'timeConversion' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts STRING s as parameter.
 */

function timeConversion($s) {
    // Write your code here
    $hour = intval(substr($s, 0, 2));
    $period = substr($s, 8, 2);
    if ($period=='PM') {
        if ($hour!=12) {
            $hour = $hour + 12;
        }
    } else {
        if ($hour==12) {
            $hour= '00';
        }
    }
    return str_pad($hour, 2, '0', STR_PAD_LEFT) . substr($s, 2, 6);

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$s = rtrim(fgets(STDIN), "\r\n");

$result = timeConversion($s);

fwrite($fptr, $result . "\n");

fclose($fptr);
