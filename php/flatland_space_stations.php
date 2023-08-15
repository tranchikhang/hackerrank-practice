<?php

// Complete the flatlandSpaceStations function below.
function flatlandSpaceStations($n, $c) {
    $max = 0;
    sort($c);
    $station = array_fill(0, $n, 0);
    // loop through all stations
    for ($i=0 ; $i<count($c) ; $i++) {
        $station[$c[$i]] = 1;
    }
    $stationIdx = -1;
    // loop through all cities
    for ($i=0 ; $i<$n ; $i++) {
        if ($station[$i] == 1) {
            $stationIdx++;
            continue;
        }

        $forward = 0;
        $backward = 0;
        // if no previous station
        if ($stationIdx != -1) {
            if ($i-$c[$stationIdx] < 0) {
                $backward = 999999;
            } else {
                $backward = $i - $c[$stationIdx];
            }
        } else {
            $backward = 999999;
        }
        // check station ahead
        if ($stationIdx<count($c)-1 && $c[$stationIdx+1] > $i) {
            $forward = $c[$stationIdx+1] - $i;
        } else {
            $forward = 999999;
        }
        $temp = min($forward, $backward);

        if ($temp > $max) {
            $max = $temp;
        }
    }
    return $max;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $nm_temp);
$nm = explode(' ', $nm_temp);

$n = intval($nm[0]);

$m = intval($nm[1]);

fscanf($stdin, "%[^\n]", $c_temp);

$c = array_map('intval', preg_split('/ /', $c_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = flatlandSpaceStations($n, $c);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
