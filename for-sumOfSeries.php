<?php

function sumOfSeries($start, $end) {

    $sum = 0;
    for ($i = $start; $i <= $end; $i++) {
        $sum += $i;
    }
    return $sum;
}


echo sumOfSeries(1, 1), PHP_EOL; // 1
echo sumOfSeries(1, 3), PHP_EOL; // 6
echo sumOfSeries(4, 7); // 22
