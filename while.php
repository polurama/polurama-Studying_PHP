<?php

function printNumbers($firstNumber)
{
    $i = $firstNumber;
    while ($i >= 1) {
        print_r("{$i}\n");
        $i = $i - 1;
    }
    print_r('finished!');
}

printNumbers(4);