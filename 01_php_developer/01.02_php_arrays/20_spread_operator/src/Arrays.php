<?php

namespace App\Arrays;

// BEGIN (write your solution here)
function flatten(array $arr): array
{
    $result = [];
    foreach ($arr as $item) {
        is_array($item) ? $result = [...$result, ...$item] : $result[] = $item;
    }
    return $result;
}
// END


// Для пустого массива возвращается []
var_dump(flatten([])); // []
//var_dump(flatten([1, [3, 2], 9])); // [1, 3, 2, 9]
//var_dump(flatten([1, [[2], [3]], [9]])); // [1, [2], [3], 9]


// Решение учителя идентично