<?php

namespace App\Arrays;

// BEGIN (write your solution here)
function _calculateAverage(array $arr)
{
    if (count($arr) === 0) {
        return 0;
    }
    return array_sum($arr) / count($arr);
}

// END
$temperatures = [37.5, 34, 39.3, 40, 38.7, 41.5];

//print_r(calculateAverage($temperatures)); // 38.5

$temperatures = [];

//calculateAverage($temperatures); // 0

// Решение учителя
// Более низкий уровень, без использования array_sum

function calculateAverage($coll)
{
    if (empty($coll)) {
        return 0;
    }

    $sum = 0;
    foreach ($coll as $item) {
        $sum += $item;
    }

    return $sum / count($coll);
}