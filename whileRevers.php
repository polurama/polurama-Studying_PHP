<?php

function reverse($name)
{
    $result = "";
    $i = 0;
    while ($i < strlen($name)) {

    $currentChar = $name[$i];
    $result = "{$currentChar} {$result}";
        $i++;
    }
    return $result;
}
echo reverse('Russia');

