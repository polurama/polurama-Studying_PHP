<?php

function isLeapYear($year) {
    return $year % 400 === 0 || ($year % 4 === 0 && $year % 100 !== 0);
    }

var_dump(isLeapYear(2018));
var_dump(isLeapYear(2017));
var_dump(isLeapYear(2016));