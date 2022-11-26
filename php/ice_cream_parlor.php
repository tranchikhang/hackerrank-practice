<?php

/*
 * Complete the 'whatFlavors' function below.
 *
 * The function accepts following parameters:
 *  1. INTEGER_ARRAY cost
 *  2. INTEGER money
 */

function whatFlavors($cost, $money) {
    $hash = [];
    $result = "";
    for ($i=0 ; $i<count($cost) ; $i++) {
        $ice = $cost[$i];
        if ($i!=0 && array_key_exists($money - $ice, $hash)) {
            $result .= ($hash[$money - $ice] + 1) . ' ' . ($i+1) . PHP_EOL;
            break;
        }
        $hash[$ice] = $i;
    }
    print_r($hash);
    print_r($result);
}

$t = intval(trim(fgets(STDIN)));

for ($t_itr = 0; $t_itr < $t; $t_itr++) {
    $money = intval(trim(fgets(STDIN)));

    $n = intval(trim(fgets(STDIN)));

    $cost_temp = rtrim(fgets(STDIN));

    $cost = array_map('intval', preg_split('/ /', $cost_temp, -1, PREG_SPLIT_NO_EMPTY));

    whatFlavors($cost, $money);
}
