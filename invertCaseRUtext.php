<?php

function invertCase($text) {

$resultStr = '';
$length = mb_strlen($text);
for ($i = 0; $i < $length; $i++) {
   $upperSymbol = mb_strtoupper(mb_substr($text, $i, 1));
   if ($upperSymbol === mb_substr($text, $i, 1)) {
       $resultStr .= mb_strtolower((mb_substr($text, $i, 1)));
   } else {
       $resultStr .= $upperSymbol;
   }
}
    return $resultStr;
}

$str = 'ПрИвЕт4545kkiiIII!';
var_dump(invertCase($str)); // пРиВеТ!
