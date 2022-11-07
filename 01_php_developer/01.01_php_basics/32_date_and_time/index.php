<?php

function _getCustomDate(int $timestamp): string
{
    return date('d/m/o', $timestamp);
}

var_dump(getCustomDate(1532435204)); // 24/07/2018;

// Решение учителя

function getCustomDate($timestamp)
{
    return date('d/m/Y', $timestamp);
}

// Вместо 'o' можно 'Y' - так нагляднее и понятнее