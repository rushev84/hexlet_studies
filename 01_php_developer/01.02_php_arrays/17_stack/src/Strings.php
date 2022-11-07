<?php

namespace App\Strings;

// BEGIN (write your solution here)
function _checkIfBalanced(string $text): bool
{
    $count = 0;
    foreach (str_split($text) as $symbol) {
        if ($symbol === '(') {
            $count++;
        }
        if ($symbol === ')') {
            $count--;
        }
        if ($count < 0) {
            return false;
        }
    }
    return $count === 0;
}
// END

var_dump(checkIfBalanced('(5 + 6) * (7 + 8)/(4 + 3)')); // true
//var_dump(checkIfBalanced('(4 + 3))')); // false
//var_dump(empty([]));

// Решение учителя
// Реализовано через стек, но в данном случае я не вижу в нём необходимости

function checkIfBalanced(string $expression): bool
{
    $stack = [];
    for ($i = 0, $length = strlen($expression); $i < $length; $i++) {
        $curr = $expression[$i];
        if ($curr === '(') {
            array_push($stack, $curr);
        } elseif ($curr === ')') {
            if (empty($stack)) {
                return false;
            }
            array_pop($stack);
        };
    }

    return empty($stack);
}