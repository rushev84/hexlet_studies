<?php

namespace App\Arrays;

// BEGIN (write your solution here)
function get(array $arr, int $index, $default = null)
{
    return array_key_exists($index, $arr) ? $arr[$index] : $default;
}
// END

$cities = ['moscow', 'london', 'berlin', 'porto', null];

//var_dump(get($cities, 1)); // london
//var_dump(get($cities, 10, 'paris')); // paris
//var_dump(get($cities, 4)); // null
var_dump(get($cities, 4, 'default')); // null