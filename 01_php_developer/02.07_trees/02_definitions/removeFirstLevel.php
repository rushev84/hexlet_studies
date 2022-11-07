<?php

namespace App\removeFirstLevel;

// BEGIN (write your solution here)
function removeFirstLevel2(array $tree): array
{
    $newTree = [];
    foreach ($tree as $node) {
        if (is_array($node)) {
            foreach ($node as $innerNode) {
                $newTree[] = $innerNode;
            }
        }
    }
    return $newTree;
}

// внутренний цикл можно заменить на смерживание массива:
function removeFirstLevel3(array $tree): array
{
    $newTree = [];
    foreach ($tree as $node) {
        if (is_array($node)) {
                $newTree[] = $node;
        }
    }
    return array_merge(...$newTree);
}

// а внешний цикл можно заменить на фильтрацию:
function removeFirstLevel(array $tree): array
{
    $newTree = array_filter($tree, fn($node) => is_array($node));
    return array_merge(...$newTree);
}
// END

$tree1 = [[5], 1, [3, 4]];
//print_r(removeFirstLevel($tree1)); // [5, 3, 4]

$tree2 = [1, 2, [3, 5], [[4, 3], 2]];
print_r(removeFirstLevel($tree2)); // [3, 5, [4, 3], 2]