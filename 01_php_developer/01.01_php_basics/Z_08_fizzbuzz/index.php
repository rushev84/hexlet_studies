<?php

// https://ru.hexlet.io/challenges/php_basics_fizzbuzz_exercise

function myFizzBuzz($begin, $end)
{
    $result = [];
    if ($begin <= $end) {
        for ($i = $begin; $i <= $end; $i++) {
            if ($i % 3 === 0 && $i % 5 === 0) {
                $result[] = 'FizzBuzz';
                continue;
            }
            if ($i % 3 === 0) {
                $result[] = 'Fizz';
                continue;
            }
            if ($i % 5 === 0) {
                $result[] = 'Buzz';
                continue;
            }
            $result[] = $i;
        }
        print_r(implode(' ', $result));
    }
}

// Решение учителя

function fizzBuzz($begin, $end)
{
    for ($i = $begin; $i <= $end; $i++) {
        $hasFizz = $i % 3 === 0;
        $hasBuzz = $i % 5 === 0;
        $fizzPart = $hasFizz ? 'Fizz' : '';
        $buzzPart = $hasBuzz ? 'Buzz' : '';
        print_r($hasFizz || $hasBuzz ? "{$fizzPart}{$buzzPart}" : $i);
        print_r(" ");
    }
}

// Решение более лаконичное.
// 1. Сначала проверяем, есть ли у нас вообще какой-то Fizz или какой-то Buzz.
// 2. Создаём нужные строки (части)
// 3. В печати смотритм - если есть или Fizz, или Buzz, или оба - печатаем эти части. Если нет, то печатаем $i.


fizzBuzz(11, 20);