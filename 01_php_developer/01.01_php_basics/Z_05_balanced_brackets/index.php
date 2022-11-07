<?php

function _isBalanced(string $brackets)
{
    $stack = 0;
    foreach (str_split($brackets) as $bracket) {
        if ($bracket === '(') {
            $stack = $stack + 1;
        } elseif ($bracket === ')') {
            $stack = $stack - 1;
        }
        if ($stack < 0) {
            return false;
        }
    }

    return $stack === 0;
}

var_dump(isBalanced('())('));

// Решение учителя

function isBalanced($str)
{
    $count = 0;
    for ($i = 0; $i < strlen($str); $i++) {
        $count = $str[$i] === '(' ? $count + 1 : $count - 1;
        if ($count < 0) {
            return false;
        }
    }

    return $count === 0;
}

// 1. Видимо, лучше называть просто $count, а не $stack в данном случае.
// 2. Можно не делать вторую проверку на ')', а сразу уменьшать счётчик на единицу. И так понятно, что этот символ будет ')', это следует из условия задачи.