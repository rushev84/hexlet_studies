<?php

// Реализуйте функцию getIn, которая извлекает из массива (который может быть любой глубины вложенности) значение по указанным ключам. Аргументы:
//
//Исходный массив
//Массив ключей, по которым ведется поиск значения
//В случае, когда добраться до значения невозможно, возвращается null.

function getIn(array $data, array $keys)
{
    $current = $data;

    for ($i = 0; $i < count($keys); $i++) {
        if(!is_array($current)) {
            return null;
        }

        if (array_key_exists($keys[$i], $current)) {
            $current = $current[$keys[$i]];
        } else {
            return null;
        }
    }

    return $current;
}
