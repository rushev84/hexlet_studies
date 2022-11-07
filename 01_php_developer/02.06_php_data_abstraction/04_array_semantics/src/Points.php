<?php

namespace App\Points;

// BEGIN (write your solution here)
function getMidPoint(array $point1, array $point2): array
{
    return [
        'x' => ($point2['x'] + $point1['x']) / 2,
        'y' => ($point2['y'] + $point1['y']) / 2
    ];
}
// END


$point1 = ['x' => -1, 'y' => 10];
$point2 = ['x' => 0, 'y' => -3];
$point3 = getMidpoint($point1, $point2);
print_r($point3); // => [ 'x' => -0.5, 'y' => 3.5 ]
