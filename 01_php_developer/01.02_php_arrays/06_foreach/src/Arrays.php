<?php

namespace App\Arrays;

// BEGIN (write your solution here)
function _isContinuousSequence(array $sequence)
{
    if (count($sequence) <= 1) {
        return false;
    }
    for ($i = 0, $length = count($sequence); $i < $length - 2; $i++) {
        if ($sequence[$i] !== $sequence[$i + 1] - 1) {
            return false;
        }
    }
    return true;
}


// END
//var_dump(isContinuousSequence([10, 11, 12, 13]));     // true
//var_dump(isContinuousSequence([10, 11, 12, 14, 15])); // false
//var_dump(isContinuousSequence([1, 2, 2, 3]));         // false
var_dump(isContinuousSequence([]));                   // false


// Решение учителя

function isContinuousSequence($coll)
{
    if (count($coll) <= 1) {
        return false;
    }
    $start = $coll[0];
    foreach ($coll as $i => $item) {
        if ($start + $i !== $item) {
            return false;
        }
    }

    return true;
}