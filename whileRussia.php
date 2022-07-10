<?php

function printNameBySymbol($name)
{
    $result = "";
    $i = 0;
    while ($i < strlen($name)) {

    $result = "{$result}{$name[$i]} ";
        $i++;
    }
    return $result;
}
echo printNameBySymbol('Russia');

