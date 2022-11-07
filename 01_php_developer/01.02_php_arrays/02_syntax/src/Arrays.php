<?php

namespace App\Arrays;

function _apply(array $arr, string $operationName, int $index = null, $value = null): array
{
    // BEGIN (write your solution here)
    switch ($operationName) {
        case 'reset':
            return [];
        case 'remove':
            unset($arr[$index]);
            return $arr;
        case 'change':
            $arr[$index] = $value;
            return $arr;
    }
    // END
}

$cities = ['moscow', 'london', 'berlin', 'porto'];

// Сброс в пустой массив
//var_dump(apply($cities, 'reset')); // []

// удаление значения по индексу
//var_dump(apply($cities, 'remove', 1)); // ['moscow', 'berlin', 'porto']
// изменение значения по индексу
var_dump(apply($cities, 'change', 0, 'miami')); // ['miami', 'london', 'berlin', 'porto']


// Решение учителя
// Да, можно и так - сначала менять массив, а потом в конце его возвращать

function apply(array $arr, string $operationName, int $index = null, $value = null): array
{
    // BEGIN
    switch ($operationName) {
        case 'reset':
            $arr = [];
            break;
        case 'change':
            $arr[$index] = $value;
            break;
        case 'remove':
            unset($arr[$index]);
            break;
    }
    return $arr;
    // END
}