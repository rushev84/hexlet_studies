<?php

namespace App\Arrays;

// BEGIN (write your solution here)
function _addPrefix(array $names, string $prefix): array
{
    $result = [];
    for ($i = 0; $i < count($names); $i++) {
        $result[] = "{$prefix} {$names[$i]}";
    }
    return $result;
}
// END

$names = ['john', 'smith', 'karl'];

$newNames = addPrefix($names, 'Mr');
print_r($newNames);
// => ['Mr john', 'Mr smith', 'Mr karl'];


// Решение учителя
// длину массива нужно инициализировать в начале, чтобы она не высчитывалась на каждой итерации цикла

function addPrefix($names, $prefix)
{
    $result = [];
    for ($i = 0, $length = count($names); $i < $length; $i++) {
        $result[$i] = "{$prefix} {$names[$i]}";
    }

    return $result;
}