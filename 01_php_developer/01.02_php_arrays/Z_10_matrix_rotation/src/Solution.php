<?php

namespace App\Solution;

// BEGIN (write your solution here)
function rotateLeft(array $matrix): array
{
    $height = count($matrix[0]);
    $width = count($matrix);

    $rotatedMatrix = [];

    for ($i = 0; $i < $height; $i++) {
        $rotatedMatrix[] = [];
        for ($j = 0; $j < $width; $j++) {
            $rotatedMatrix[$i][$j] = $matrix[$j][$height - $i - 1];
        }
    }

    return $rotatedMatrix;
}

function rotateRight(array $matrix): array
{
    $height = count($matrix[0]);
    $width = count($matrix);

    $rotatedMatrix = [];

    for ($i = 0; $i < $height; $i++) {
        $rotatedMatrix[] = [];
        for ($j = 0; $j < $width; $j++) {
            $rotatedMatrix[$i][$j] = $matrix[$width - $j - 1][$i];
        }
    }

    return $rotatedMatrix;
}
// END

$matrix = [
    [1, 2, 3, 4],
    [5, 6, 7, 8],
    [9, 0, 1, 2],
];


print_r(rotateRight($matrix));

//rotateLeft($matrix);
// [
//   [4, 8, 2],
//   [3, 7, 1],
//   [2, 6, 0],
//   [1, 5, 9],
// ]

//rotateRight($matrix);
// [
//   [9, 5, 1],
//   [0, 6, 2],
//   [1, 7, 3],
//   [2, 8, 4],
// ]