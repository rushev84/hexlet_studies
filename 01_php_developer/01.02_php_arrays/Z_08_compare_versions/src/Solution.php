<?php

namespace App\Solution;

// BEGIN (write your solution here)
function _compareVersion(string $version1, string $version2): int
{
    [$major1, $minor1] = explode('.', $version1);
    [$major2, $minor2] = explode('.', $version2);

    switch ((int)$major1 <=> (int)$major2) {
        case 1:
            return 1;
            break;
        case -1:
            return -1;
            break;
        case 0:
            return (int)$minor1 <=> (int)$minor2;
    }
}

// END

//var_dump(compareVersion('21.11', '21.2'));

//var_dump(compareVersion("0.1", "0.2")); // → -1

//var_dump(compareVersion("0.2", "0.1")); // → 1

var_dump(compareVersion("4.2", "4.2")); // → 0

//var_dump(version_compare('0.101', '0.2'));


// Решение учителя
// Не знал, что оператор spaceship может сравнивать напрямую массивы. Теперь буду знать.

function compareVersion(string $first, string $second)
{
    $version1 = explode('.', $first);
    $version2 = explode('.', $second);

    return $version1 <=> $version2;
}