<?php

namespace App\Arrays;

// BEGIN (write your solution here)
function getSameCount(array $arr1, array $arr2): int
{
    $arr1Unique = array_unique($arr1);
    $arr2Unique = array_unique($arr2);

    $count = 0;

    foreach ($arr1Unique as $item1) {
        foreach ($arr2Unique as $item2) {
            if ($item2 === $item1) {
                $count++;
            }
        }
    }

    return $count;
}
// END

print_r(getSameCount([], [])); // 0
//print_r(getSameCount([4, 4], [4, 4])); // 1
//print_r(getSameCount([1, 10, 3], [10, 100, 35, 1])); // 2
//print_r(getSameCount([1, 3, 2, 2], [3, 1, 1, 2])); // 3


// Решение учителя абсолютно идентично