<?php

namespace App\Number;

// BEGIN (write your solution here)
function _reverse(int $number): int
{
    $absNumber = abs($number);
    $revNumber = strrev((string) $absNumber);
    return $number < 0 ? (int) "-{$revNumber}" : (int) $revNumber;
}
// END

//var_dump(reverse(13)); // 31
var_dump(reverse(-123)); // -321

// Решение учителя (лаконичней)

function reverse(int $num): int
{
    $reverse = (int) strrev((string) abs($num));
    return $num >= 0 ? $reverse : -$reverse;
}