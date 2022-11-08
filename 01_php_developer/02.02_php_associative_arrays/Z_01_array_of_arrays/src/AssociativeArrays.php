<?php

namespace App\AssociativeArrays;
require_once __DIR__ . '/../vendor/autoload.php';

// BEGIN (write your solution here)
function _fromPairs(array $pairs): array
{
    $assocArr = [];
    foreach ($pairs as $pair) {
        $assocArr[$pair[0]] = $pair[1];
    }
    return $assocArr;
}
// END

//dump(fromPairs([['cat', 5], ['dog', 6], ['cat', 11]]));
// ['cat' => 11, 'dog' => 6]

dump(fromPairs([['fred', 30], ['barney', 40]]));
// ['fred' => 30, 'barney' => 40]


// Решение учителя. Можно и так

function fromPairs(array $data)
{
    $result = [];
    foreach ($data as [$key, $value]) {
        $result[$key] = $value;
    }

    return $result;
}