<?php


namespace App\Arrays;
require_once __DIR__ . '/../vendor/autoload.php';

// BEGIN (write your solution here)
function _getIn(array $data, array $keys)
{
    $currentNode = $data;

    foreach ($keys as $key) {
        if (is_array($currentNode) && array_key_exists($key, $currentNode)) {
            $currentNode = $currentNode[$key];
        } else {
            return null;
        }
    }

    return $currentNode;
}
// END

// !!! Моя главная ошибка была в том, что я почему-то решил, что здесь нужна рекурсия, хотя нужен просто цикл. Ключевой же момент решения - смена текущего узла ($currentNode).

$data = [
    'user' => 'ubuntu',
    'hosts' => [
        ['name' => 'web1'],
        ['name' => 'web2', null => 3, 'active' => false]
    ]
];

//dump(getIn($data, ['undefined'])); // null
//dump(getIn($data, ['user'])); // 'ubuntu'
//dump(getIn($data, ['user', 'ubuntu'])); // null
//dump(getIn($data, ['hosts', 1, 'name'])); // 'web2'
//dump(getIn($data, ['hosts', 0])); // ['name' => 'web1']
//dump(getIn($data, ['hosts', 1, null])); // 3
dump(getIn($data, ['hosts', 1, 'active'])); // false


// Решение учителя

function getIn(array $data, array $keys)
{
    $current = $data;
    foreach ($keys as $key) {
        if (!is_array($current) || !array_key_exists($key, $current)) {
            return null;
        }
        $current = $current[$key];
    }

    return $current;
}