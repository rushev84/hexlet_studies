<?php

function isHappy(string $number): bool
{
    $parts = array_chunk(str_split($number), strlen($number) / 2);
    return array_sum($parts[0]) === array_sum($parts[1]);
}

var_dump(isHappy('123321'));