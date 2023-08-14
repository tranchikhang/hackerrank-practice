<?php

/*
 * Complete the 'libraryFine' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER d1
 *  2. INTEGER m1
 *  3. INTEGER y1
 *  4. INTEGER d2
 *  5. INTEGER m2
 *  6. INTEGER y2
 */

function libraryFine($d1, $m1, $y1, $d2, $m2, $y2) {
    // Write your code here
    $return = new DateTime($y1 . '-' . $m1 . '-' . $d1);
    $due = new DateTime($y2 . '-' . $m2 . '-' . $d2);
    $diff = $due->diff($return)->format("%r%a");
    print_r($diff . PHP_EOL);
    if ($diff<=0) {
        return 0;
    }
    if ($y1!=$y2) {
        return 10000;
    }
    if ($m1 != $m2) {
        return 500 * ($m1-$m2);
    }
    return 15*$diff;

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$first_multiple_input = explode(' ', rtrim(fgets(STDIN)));

$d1 = intval($first_multiple_input[0]);

$m1 = intval($first_multiple_input[1]);

$y1 = intval($first_multiple_input[2]);

$second_multiple_input = explode(' ', rtrim(fgets(STDIN)));

$d2 = intval($second_multiple_input[0]);

$m2 = intval($second_multiple_input[1]);

$y2 = intval($second_multiple_input[2]);

$result = libraryFine($d1, $m1, $y1, $d2, $m2, $y2);

fwrite($fptr, $result . "\n");

fclose($fptr);
