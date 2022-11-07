<?php

namespace App\Arrays;
require_once __DIR__ . '/../vendor/autoload.php';

// BEGIN (write your solution here)
function calcInPolishNotation(array $arr)
{
    $size = count($arr);

    if ($size === 3) {
        [$operand1, $operand2, $operation] = $arr;
        switch ($operation) {
            case '+':
                return $operand1 + $operand2;
            case '-':
                return $operand1 - $operand2;
            case '*':
                return $operand1 * $operand2;
            case '/':
                return $operand2 === 0 ? null : $operand1 / $operand2;
        }
    }

    $operations = ['+', '-', '*', '/'];

    for ($i = 0; $i < $size; $i++) {
        $current = $arr[$i];
        $next1 = $arr[$i + 1] ?? null;
        $next2 = $arr[$i + 2] ?? null;

        if (gettype($current) === 'integer' && gettype($next1) === 'integer' && in_array($next2, $operations)) {
            $before = array_slice($arr, 0, $i);
            $after = array_slice($arr, $i + 3);
            $middle = array_slice($arr, $i, 3);

            return calcInPolishNotation([...$before, calcInPolishNotation($middle), ...$after]);
        }
    }
}

// END

//dump(calcInPolishNotation([1, 2, '+', 4, '*', 3, '+']));
// → 15

//dump(calcInPolishNotation([1, 2, '+', 4, '+', 3, '+']));
// → 10

dump(calcInPolishNotation([7, 2, 3, '*', '-']));
// → 1