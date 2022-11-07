<?php

namespace App\Vars;

// BEGIN (write your solution here)
function swap(int &$a, int &$b)
{
    $tmp = $a;
    $a = $b;
    $b = $tmp;
}
// END

$a = 5;
$b = 8;
swap($a, $b);

print_r($a); // 8
print_r($b); // 5
