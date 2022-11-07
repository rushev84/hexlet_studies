<?php

// Решение учителя
// Реализована одна функция rotate с параметрами - я тоже думал, что так можно. В остальном алгоритм идентичен.

function rotate($matrix, $direction)
{
    $rowsCount = count($matrix);
    [$firstRow] = $matrix;
    $columnsCount = count($firstRow);
    $rotatedMatrix = [];

    for ($i = 0; $i < $columnsCount; $i++) {
        for ($j = 0; $j < $rowsCount; $j++) {
            $rotatedMatrix[$i][$j] = ($direction === 'left')
                ? $matrix[$j][$columnsCount - $i - 1]
                : $matrix[$rowsCount - $j - 1][$i];
        }
    }

    return $rotatedMatrix;
}


function rotateLeft($matrix)
{
    return rotate($matrix, 'left');
}


function rotateRight($matrix)
{
    return rotate($matrix, 'right');
}