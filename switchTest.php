<?php

function doSomethingGood($anser)
{

    switch ($anser) {
        case 9 ;
        case 10 ;
            return 'good';
        case 11 ;
            return 'better';
}
}
echo doSomethingGood(12);