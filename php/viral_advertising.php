<?php

/*
 * Complete the 'viralAdvertising' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER n as parameter.
 */

function viralAdvertising($n) {
    // Write your code here
    $result = 5;
    $friendCount = 3;
    $liked = 0;
    for ($i=0 ; $i<$n ; $i++) {
        // people liked
        $liked += floor($result/2);
        // people who received ads
        $result = (floor($result/2))*$friendCount;
    }
    return $liked;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$result = viralAdvertising($n);

fwrite($fptr, $result . "\n");

fclose($fptr);
