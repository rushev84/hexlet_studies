<?php

function myisPerfect($num)
{
    if (!is_int($num) || $num < 1) {
        return false;
    }

    $dividers = [];
    for ($i = 1; $i < $num; $i++) {
        if ($num % $i === 0) {
            $dividers[] = $i;
        }
    }

    return array_sum($dividers) === $num ? true : false;
}

// Решение учителя

function isPerfect($num)
{
    if ($num === 0) {
        return false;
    }

    $upperBorder = $num / 2;
    $sum = 0;
    for ($divisor = 1; $divisor <= $upperBorder; $divisor++) {
        if ($num % $divisor === 0) {
            $sum += $divisor;
        }
    }
    return $sum === $num;
}

// Решение лучше.
// 1. Не обязательно делать проверку на то, является ли передаваемое число целым - тут нужно ориентироваться на тесты (какие там параметры передаются).
// 2. Так же не обязательна проверка на отрицательность. Если переданное число отрицательное, то захода в цикл for просто не произойдёт - соответственно, сумма делителей будет равна нулю.
// 3. Я люблю использовать массивы, но в данном случае это ни к чему - можно наращивать сумму простым сложением.
// 4. Конструкция     return array_sum($dividers) === $num ? true : false;
// легко заменяется на     return array_sum($dividers) === $num;


isPerfect(-6);