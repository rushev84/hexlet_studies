<?php

namespace App\Arrays;
require_once __DIR__ . '/../vendor/autoload.php';

// BEGIN (write your solution here)
function pick(array $data, array $expectedKeys): array
{
    $result = [];
    foreach ($expectedKeys as $expectedKey) {
        if (array_key_exists($expectedKey, $data)) {
            $result[$expectedKey] = $data[$expectedKey];
        }
    }
    return $result;
}
// END

$data = [
    'user' => 'ubuntu',
    'cores' => 4,
    'os' => 'linux',
    'null' => null
];

//dump(pick($data, ['user']));       // → ['user' => 'ubuntu']
//dump(pick($data, ['user', 'os'])); // → ['user' => 'ubuntu', 'os' => 'linux']
//dump(pick($data, []));             // → []
//dump(pick($data, ['none']));       // → []
dump(pick($data, ['null']));        // → ['null' => null]

// Решение учителя. Идентично
