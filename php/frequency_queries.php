<?php

// Complete the freqQuery function below.
function freqQuery($queries) {
    $result = [];
    $freq = [];
    $str = [];
    foreach ($queries as $query) {
        $operation = $query[0];
        $val = $query[1];
        if ($operation == 1) {
            if (!array_key_exists($val, $result)) {
                $result[$val] = 1;
            } else {
                $result[$val] += 1;
            }
        } elseif ($operation == 2) {
            if (array_key_exists($val, $result)) {
                if ($result[$val]>1) {
                    $result[$val] -= 1;
                } else {
                    unset($result[$val]);
                }

            }
        } elseif ($operation == 3) {
            $flg = false;
            $flipped = array_flip($result);
            if (array_key_exists($val, $flipped)) {
                $str[] = 1;
            } else {
                $str[] = 0;
            }
            // foreach ($result as $key => $v) {
            //     if ($v == $val) {
            //         $str[] = 1;
            //         $flg = true;
            //         break;
            //     }
            // }
            // if (!$flg) {
            //     $str[] = 0;
            // }
        }
    }
    // print_r($str);
    return $str;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$q = intval(trim(fgets(STDIN)));

$queries = array();

for ($i = 0; $i < $q; $i++) {
    $queries_temp = rtrim(fgets(STDIN));

    $queries[] = array_map('intval', preg_split('/ /', $queries_temp, -1, PREG_SPLIT_NO_EMPTY));
}

$ans = freqQuery($queries);

fwrite($fptr, implode("\n", $ans) . "\n");

fclose($fptr);

