<?php

function isArgumentsForSubstrCorrect($str, $index, $substrLength) {
    if($index !== abs($index) || $substrLength !== abs($substrLength) || $index > (strlen($str) - 1) || ($index + $substrLength) > strlen($str)) {
    return false;
} else {
    return true;
}
}

$str = 'Sansa Stark';
var_dump(isArgumentsForSubstrCorrect($str, -1, 3));  // false
var_dump(isArgumentsForSubstrCorrect($str, 4, 100)); // false
var_dump(isArgumentsForSubstrCorrect($str, 10, 10)); // false
var_dump(isArgumentsForSubstrCorrect($str, 11, 1));  // false
var_dump(isArgumentsForSubstrCorrect($str, 3, 3));   // true
var_dump(isArgumentsForSubstrCorrect($str, 0, 5));   // true
var_dump(isArgumentsForSubstrCorrect($str, 1, 10));   // true

//$a = 1;
//echo ++$a;
//echo $a++;