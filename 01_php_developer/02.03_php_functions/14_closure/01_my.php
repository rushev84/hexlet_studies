<?php

require_once __DIR__ . '/vendor/autoload.php';

use Funct\Collection;

// Реализуйте функцию without, которая работает по такому же принципу, что и функция из теории, кроме одного аспекта. Эта функция должна принимать любое число аргументов, где первый аргумент массив, а все остальные - значения, которые нужно исключить из переданного массива. Сделайте решение функциональным.
//
//Эту задачу можно решить с помощью функции array_diff, но подразумевается что вы сделаете это без ее использования.

function without($items, ...$values)
{
    $filtered = array_filter($items, function ($item) use ($values) {
        return !in_array($item, $values, $strict = true);
    });
    return array_values($filtered);
}

//print_r(without([], null)); // []
//print_r(without([3, 4, 10, 4, 'true'], 4)); // [3, 10, 'true']
//print_r(without(['wow', 3, 4, 10, 4, 'true'], null, 4)); // ['wow', 3, 10, 'true']
//print_r(without([3, 4, 10, 'true'], 3, 4)); // [10, 'true']
//print_r(without(['3', 2], 0, 5)); // ['3', 2]
print_r(without(['wow', false, 4, 0, 4, 'true'], false, 4)); // ['wow', 0, 'true']

