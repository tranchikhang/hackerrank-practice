<?php

/*
 * Complete the 'organizingContainers' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts 2D_INTEGER_ARRAY container as parameter.
 */

function organizingContainers($container) {
    // Write your code here
    $map = [];
    foreach ($container as $c) {
        for ($i=0 ; $i<count($c) ; $i++) {
            if (array_key_exists($i, $map)) {
                $map[$i] += $c[$i];
            } else {
                $map[$i] = $c[$i];
            }
        }
    }
    // loop through ball types
    foreach ($map as $ball => $val) {
        $flag = false;
        // loop through containers
        foreach ($container as $c) {
            $diff1 = array_sum($c) - $c[$ball];
            $diff2 = $val - $c[$ball];
            if ($diff1 == $diff2) {
                $flag = true;
                break;
            }
        }
        if (!$flag) {
            return "Impossible";
        }
    }
    return "Possible";
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$q = intval(trim(fgets(STDIN)));

for ($q_itr = 0; $q_itr < $q; $q_itr++) {
    $n = intval(trim(fgets(STDIN)));

    $container = array();

    for ($i = 0; $i < $n; $i++) {
        $container_temp = rtrim(fgets(STDIN));

        $container[] = array_map('intval', preg_split('/ /', $container_temp, -1, PREG_SPLIT_NO_EMPTY));
    }

    $result = organizingContainers($container);

    fwrite($fptr, $result . "\n");
}

fclose($fptr);
