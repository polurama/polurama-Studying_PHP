<?php

function joinNumbersFromRange($start, $finish) {

    $i = $start;
    $result = '';
    while ($i <= $finish) {
        $result = "{$result}{$i}";
        $i++;
    }
    return $result;
}

echo joinNumbersFromRange(1, 1), PHP_EOL;  // '1'
echo joinNumbersFromRange(2, 3), PHP_EOL;  // '23'
echo joinNumbersFromRange(5, 10); // '5678910'
