<?php

namespace App\Solution;
require_once __DIR__ . '/../vendor/autoload.php';

// BEGIN (write your solution here)
function _combine(array $dictionaries): array
{
    // Создаём пустой словарь с правильными ключами
    $emptyDictionary = array_map(fn($item) => [], array_merge(...$dictionaries));

    // Наполняем ключи значениями
    foreach ($dictionaries as $dictionary) {
        foreach ($dictionary as $key => $value) {
            $emptyDictionary[$key][] = $value;
        }
    }

    // Убираем повторяющиеся значения и перенумеровываем массивы
    return array_map(fn($item) => array_values(array_unique($item)), $emptyDictionary);
}

// END

//combine([[], [], [], []]);
// [];

//combine([['a' => 1, 'b' => 2], ['a' => 3]]);
// [ 'a' => [1, 3], 'b' => [2]];

dump(combine([
    ['a' => 1, 'b' => 2, 'c' => 3],
    [],
    ['a' => 3, 'b' => 2, 'd' => 5],
    ['a' => 6],
    ['b' => 4, 'c' => 3, 'd' => 2],
    ['e' => 9],
]));
// [
//     'a' => [1, 3, 6],
//     'b' => [2, 4],
//     'c' => [3],
//     'd' => [5, 2],
//     'e' => [9],
// ];


// Решение учителя

function combine(array $dicts): array
{
    $result = [];
    foreach ($dicts as $item) {
        foreach ($item as $key => $value) {
            if (!array_key_exists($key, $result)) {
                $result[$key] = [$value];
            } else {
                if (!in_array($value, $result[$key])) {
                    $result[$key][] = $value;
                }
            }
        }
    }
    return $result;
}