<?php

namespace App\Arrays;

// BEGIN (write your solution here)
function _getMirrorMatrix(array $matrix): array
{
    $result = [];
    foreach ($matrix as $row) {
        $chunks = array_chunk($row, count($row) / 2);
        $newRow = array_merge($chunks[0], array_reverse($chunks[0]));
        $result[] = $newRow;
    }
    return $result;
}
// END

print_r(getMirrorMatrix([
    [11, 12, 13, 14],
    [21, 22, 23, 24],
    [31, 32, 33, 34],
    [41, 42, 43, 44],
]));

// → [
//     [11, 12, 12, 11],
//     [21, 22, 22, 21],
//     [31, 32, 32, 31],
//     [41, 42, 42, 41],
//   ]


// Решение учителя
// Сделано немного по-другому, использовался spread-оператор (неплохо бы обновить знания по нему)

function getMirrorMatrix(array $matrix): array
{
    $size = count($matrix);
    $middle = $size / 2;
    $mirroredMatrix = [];

    foreach ($matrix as $row) {
        $leftHalf = array_slice($row, 0, $middle);
        $mirroredMatrix[] = [...$leftHalf, ...array_reverse($leftHalf)];
    }

    return $mirroredMatrix;
}