<?php

function calculate($operation, $num1, $num2) {

    switch ($operation) {
        case '+' :
            return $num1 + $num2;
        case '-' :
            return $num1 - $num2;
        case '/' :
            return $num1 / $num2;
        case '*' :
            return $num1 * $num2;
        default:
            return null;
    }
}
echo calculate('#', 1,2);