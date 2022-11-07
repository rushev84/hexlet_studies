<?php

namespace App\Arrays;

// BEGIN (write your solution here)
function _getChunked(array $arr, int $length): array
{
    $result = [];
    $currentArr = [];

    foreach ($arr as $key => $item) {
        $currentArr[] = $item;
        if (count($currentArr) === $length || $key === count($arr) - 1) {
            $result[] = $currentArr;
            $currentArr = [];
        }
    }

    return $result;
}
// END

//var_dump(getChunked(['a', 'b', 'c', 'd'], 2));
// → [['a', 'b'], ['c', 'd']]

//var_dump(getChunked(['a', 'b', 'c', 'd'], 3));
// → [['a', 'b', 'c'], ['d']]


// Решение учителя
// Мне почему-то всегда кажется, что когда есть задание эмулировать какую-то встроенную в язык функцию, то нужно по минимуму использовать другие встроенные функции. Хотя, возможно, это и не так. В данном случае использовалась array_slice.

function getChunked(array $array, int $size)
{
    $result = [];
    for ($i = 0, $length = count($array); $i < $length; $i += $size) {
        $result[] = array_slice($array, $i, $size);
    }

    return $result;
}


var_dump(array_slice([1, 4, 5, 7], 3, 3));