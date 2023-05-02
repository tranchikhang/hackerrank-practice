<?php

/*
 * Complete the 'dayOfProgrammer' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts INTEGER year as parameter.
 */

function dayOfProgrammer($year) {
    // Write your code here
    $sourceDate = null;
    if ($year<=1917) {
        $sourceDate = juliantojd(1, 1, $year);
        $sourceDate += 255;
        $pDate = jdtojulian($sourceDate);
        $arr = explode('/', $pDate);
        return sprintf("%02d", $arr[1]) . '.' . sprintf("%02d", $arr[0]) . '.' . $arr[2];
    } else {
        $sourceDate = new DateTime($year . "-01-01");
        if ($year == 1918) {
            $sourceDate->modify('+268 day');
        } else {
            $sourceDate->modify('+255 day');
        }
        return $sourceDate->format('d.m.Y');
    }
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$year = intval(trim(fgets(STDIN)));

$result = dayOfProgrammer($year);

fwrite($fptr, $result . "\n");

fclose($fptr);
