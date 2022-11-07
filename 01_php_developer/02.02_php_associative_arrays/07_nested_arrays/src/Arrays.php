<?php


namespace App\Arrays;
require_once __DIR__ . '/../vendor/autoload.php';

// BEGIN (write your solution here)
function getIn(array $data, array $keys)
{
    
}

// END


$data = [
    'user' => 'ubuntu',
    'hosts' => [
        ['name' => 'web1'],
        ['name' => 'web2', null => 3, 'active' => false]
    ]
];

getIn($data, ['undefined']); // null
getIn($data, ['user']); // 'ubuntu'
getIn($data, ['user', 'ubuntu']); // null
getIn($data, ['hosts', 1, 'name']); // 'web2'
getIn($data, ['hosts', 0]); // ['name' => 'web1']
getIn($data, ['hosts', 1, null]); // 3
getIn($data, ['hosts', 1, 'active']); // false