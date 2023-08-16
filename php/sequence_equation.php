<?php

/*
 * Complete the 'permutationEquation' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts INTEGER_ARRAY p as parameter.
 */

function permutationEquation($p) {
    // Write your code here
    $map = [];
    for ($i=1 ; $i<=count($p) ; $i++) {
        // map value to index
        $map[$p[$i-1]] = $i;
    }
    print_r($map);
    $result = [];
    for ($i=1 ; $i<=count($p) ; $i++) {
        $idx = $map[$i];
        $result[] = $map[$idx];
    }
    return $result;

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$p_temp = rtrim(fgets(STDIN));

$p = array_map('intval', preg_split('/ /', $p_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = permutationEquation($p);

fwrite($fptr, implode("\n", $result) . "\n");

fclose($fptr);
