<?php

/*
 * Complete the 'cutTheSticks' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function cutTheSticks($arr) {
    // Write your code here
    sort($arr);
    $res = [];
    do {
        $min = $arr[0];
        $limit = 0;
        $count = 0;
        if (count($arr)>1) {
            for ($i=0 ; $i<count($arr) ; $i++) {
                if ($arr[$i] > $min) {
                    $limit = $i;
                    break;
                } else {
                    $count += 1;
                }
            }
            $res[] = count($arr);
            if ($count==count($arr)) {
                // all elements are equal
                $arr = [];
            } else {
                array_splice($arr, 0, $limit);
            }
            print_r($arr);
        } else {
            $res[] = count($arr);
            $arr = [];
        }
    } while (count($arr)>0);
    return $res;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = cutTheSticks($arr);

fwrite($fptr, implode("\n", $result) . "\n");

fclose($fptr);
