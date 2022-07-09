<?php

function convertText($str) {

//    if ($str[0] === strtoupper($str[0])) {
//        $convertedText = $str;
//    } else {
//        $convertedText = strrev($str);

    return $str[0] === strtoupper($str[0]) ? $str : strrev($str);
}


echo convertText('Hello'), PHP_EOL; // 'Hello'
echo convertText('hello'); // 'olleh'