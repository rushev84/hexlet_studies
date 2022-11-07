<?php

// Реализуйте функцию pick, которая извлекает из переданного массива все элементы по указанным ключам и возвращает новый массив. Аргументы:
//
//Исходный массив
//Массив ключей, по которым должны быть выбраны элементы (ключ и значение) из исходного массива, и на основе выбранных данных сформирован новый массив

function pick(array $data, array $keys): array
{
    $result = [];
    foreach ($data as $key => $value) {
        if (in_array($key, $keys)) {
            $result[$key] = $value;
        }
    }
    return $result;
}

$data = [
    'user' => 'ubuntu',
    'cores' => 4,
    'os' => 'linux',
    'null' => null
];

print_r(pick($data, ['user']));       // → ['user' => 'ubuntu']
print_r(pick($data, ['user', 'os'])); // → ['user' => 'ubuntu', 'os' => 'linux']
print_r(pick($data, []));             // → []
pick($data, ['none']);       // → []
print_r(pick($data, ['null']));      // → ['null' => null