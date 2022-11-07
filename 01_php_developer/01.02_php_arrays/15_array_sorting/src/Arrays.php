<?php

namespace App\Arrays;

// BEGIN (write your solution here)
function bubbleSort(array $coll): array
{
    $size = count($coll);

    do {
        $swapped = false;

        for ($i = 0; $i < $size - 1; $i++) {
            if ($coll[$i] > $coll[$i + 1]) {
                $temp = $coll[$i];
                $coll[$i] = $coll[$i + 1];
                $coll[$i + 1] = $temp;

                $swapped = true;
            }
        }

        $size--;
    } while ($swapped);

    return $coll;
}

// END
//bubbleSort([]); // []
//print_r(bubbleSort([3, 10, 4, 3])); // [3, 3, 4, 10]

// Решение учителя идентично