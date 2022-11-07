<?php

namespace App\Arrays;

// BEGIN (write your solution here)
function _getTotalAmount(array $money, string $currency): int
{
    $sum = 0;
    foreach ($money as $banknote) {
        if (substr($banknote, 0, 3) !== $currency) {
            continue;
        }
        $sum += (int) substr($banknote, 4);
    }
    return $sum;
}
// END

$money1 = ['eur 10', 'usd 1', 'usd 10', 'rub 50', 'usd 5'];
//print_r(getTotalAmount($money1, 'usd')); // 16

$money2 = ['eur 10', 'usd 1', 'eur 5', 'rub 100', 'eur 20', 'eur 100', 'rub 200'];
//print_r(getTotalAmount($money2, 'eur')); // 135

$money3 = ['eur 10', 'rub 50', 'eur 5', 'rub 10', 'rub 10', 'eur 100', 'rub 200'];
print_r(getTotalAmount($money3, 'rub')); // 270


// Решение учителя
// Тоже самое, но слегка многословнее

function getTotalAmount(array $money, string $currency): int
{
    $sum = 0;

    foreach ($money as $bill) {
        $currentCurrency = substr($bill, 0, 3);
        if ($currentCurrency !== $currency) {
            continue;
        }
        $denomination = (int) substr($bill, 4);
        $sum += $denomination;
    }

    return $sum;
}