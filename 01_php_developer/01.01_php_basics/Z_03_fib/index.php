<?php

function fib(int $n): int
{
    $fib = [0, 1, 1];
    for ($i = 3; $i <= $n; $i++) {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
    }
    return $fib[$n];
}

var_dump(fib(25));