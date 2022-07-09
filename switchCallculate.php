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
    }
}
echo calculate('*', 1,5);