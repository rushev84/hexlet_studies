<?php

namespace App\Arrays;

function _getIntersectionOfSortedArray(array $arr1, array $arr2): array
{
    // BEGIN (write your solution here)
    $i1 = 0;
    $i2 = 0;

    $result = [];

    while ($i1 < count($arr1) && $i2 < count($arr2)) {
        $comparison = $arr1[$i1] <=> $arr2[$i2];
        switch ($comparison) {
            case 0:
                $result[] = $arr1[$i1];
                $i1++;
                $i2++;
                break;
            case 1:
                $i2++;
                break;
            case -1:
                $i1++;
                break;
        }
    }
    return $result;
    // END
}

//var_dump(getIntersectionOfSortedArray([10, 11, 24], [10, 13, 14, 18, 24, 30])); // [10, 24]

//var_dump(getIntersectionOfSortedArray([10, 11, 24], [-2, 3, 4])); // []

//var_dump(getIntersectionOfSortedArray([], [2])); // []


// Решение учителя
// Реализовано через if-else, а в остальном алгоритм тот же самый.
// Единственный момент - высчитывать размеры массивов лучше один раз в начале, а не внутри цикла while.

function getIntersectionOfSortedArray($arr1, $arr2)
{
    // BEGIN
    $size1 = count($arr1);
    $size2 = count($arr2);

    $i1 = 0;
    $i2 = 0;
    $result = [];
    while ($i1 < $size1 && $i2 < $size2) {
        if ($arr1[$i1] === $arr2[$i2]) {
            $result[] = $arr1[$i1];
            $i1++;
            $i2++;
        } elseif ($arr1[$i1] > $arr2[$i2]) {
            $i2++;
        } else {
            $i1++;
        }
    }

    return $result;
    // END
}