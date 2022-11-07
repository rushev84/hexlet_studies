<?php

namespace App\Arrays;

// BEGIN (write your solution here)
function _getSameParity(array $arr)
{
    if (empty($arr)) {
        return [];
    }

    $parity = $arr[0] % 2;
    $result = [];

    foreach ($arr as $num) {
        if ($num % 2 === $parity) {
            $result[] = $num;
        }
    }

    return $result;
}
// END

//print_r(getSameParity([1, 2, 5]));

//print_r(getSameParity([]));        // []
//print_r(getSameParity([1, 2, 3])); // [1, 3]
//print_r(getSameParity([1, 2, 8])); // [1]
//print_r(getSameParity([2, 2, 8])); // [2, 2, 8]


// Решение учителя
// Практически идентично, но правильнее всё же остаток от деления назвать remainder, а не parity (чётность).

function getSameParity($coll)
{
    if (empty($coll)) {
        return [];
    }

    $result = [];
    $remainder = $coll[0] % 2;
    foreach ($coll as $item) {
        if ($item % 2 === $remainder) {
            $result[] = $item;
        }
    }

    return $result;
}