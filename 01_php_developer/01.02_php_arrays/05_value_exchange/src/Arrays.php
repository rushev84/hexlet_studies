<?php

namespace App\Arrays;

// BEGIN (write your solution here)
function _swap(array $names, int $index): array
{
    $prevIndex = $index - 1;
    $nextIndex = $index + 1;

    if (!array_key_exists($prevIndex, $names) || !array_key_exists($nextIndex, $names)) {
        return $names;
    }

    $temp = $names[$prevIndex];
    $names[$prevIndex] = $names[$nextIndex];
    $names[$nextIndex] = $temp;

    return $names;
}
// END

$names = ['john', 'smith', 'karl'];

$result = swap($names, 1);
print_r($result); // => ['karl', 'smith', 'john']

$result = swap($names, 2);
print_r($result); // => ['john', 'smith', 'karl']

$result = swap($names, 0);
print_r($result); // => ['john', 'smith', 'karl']

// Решение учителя. Не сильно лучше

function swap($coll, $center)
{
    $prevIndex = $center - 1;
    $nextIndex = $center + 1;
    $isSwappable = array_key_exists($prevIndex, $coll) && array_key_exists($nextIndex, $coll);

    if ($isSwappable) {
        $temp = $coll[$prevIndex];
        $coll[$prevIndex] = $coll[$nextIndex];
        $coll[$nextIndex] = $temp;
    }

    return $coll;
}