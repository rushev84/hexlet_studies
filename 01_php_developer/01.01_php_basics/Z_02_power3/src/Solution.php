<?php

namespace App\Solution;

// BEGIN (write your solution here)
function _isPowerOfThree(int $num): bool
{
    $powersOfThree = [];

    $count = 0;
    $current = 0;
    while ($current < $num) {
        $current = 3 ** $count;
        $powersOfThree[] = $current;
        $count++;
    }

    return in_array($num, $powersOfThree);
}
// END

//var_dump(isPowerOfThree(1)); // → true (3^0)
//var_dump(isPowerOfThree(3)); // → true
//var_dump(isPowerOfThree(4)); // → false
//var_dump(isPowerOfThree(9)); // → true

// Решение учителя
// Опять я зачем-то массив использовал! Всё же гораздо проще - умножаем на три до тех пор, пока число не будет больше $num. Если на какой-то итерации число совпало с $num - возвращаем true. Если так и не совпало ни разу - возвращаем false.

function isPowerOfThree(int $num)
{
    $current = 1;
    while ($current <= $num) {
        if ($current === $num) {
            return true;
        }
        $current *= 3;
    }

    return false;
}