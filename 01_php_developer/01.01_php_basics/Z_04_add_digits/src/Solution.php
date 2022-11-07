<?php

namespace App\solution;

// BEGIN (write your solution here)
function _addDigits(int $num): int
{
    $arr = str_split((string) $num);
    $sum = 0;
    foreach ($arr as $symbol) {
        $sum += $symbol;
    }

    if ($sum >= 10) {
        return addDigits($sum);
    }

    return $sum;
}
// END


//addDigits(0); // 0
//addDigits(1); // 1
//addDigits(9); // 9
//var_dump(addDigits(10)); // 1
var_dump(addDigits(38)); // 2


// Решение учителя
// В коем-то веке моё решение лучше! Через рекурсию всё получается гораздо лаконичней

function sumDigits(int $number)
{
    $str = (string) $number;
    $result = 0;
    for ($i = 0; $i < strlen($str); $i++) {
        $result += (int) $str[$i];
    }
    return $result;
}

function isOneDigitNumber(int $number)
{
    return $number < 10;
}

function addDigits($num)
{
    $result = $num;
    while (!isOneDigitNumber($result)) {
        $result = sumDigits($result);
    }

    return $result;
}