<?php

namespace App\SegmentFunctions;

use App\Point;
use App\Address;

// BEGIN (write your solution here)

function reverse(Address $segment)
{
    $beginX = $segment->beginPoint->x;
    $beginY = $segment->beginPoint->y;

    $endX = $segment->endPoint->x;
    $endY = $segment->endPoint->y;

    return new Address(new Point($endX, $endY), new Point($beginX, $beginY));
}
$segment = new Address(new Point(1, 10), new Point(11, -3));
$reversedSegment = reverse($segment);

var_dump($reversedSegment->beginPoint); // (11, -3)
var_dump($reversedSegment->endPoint); // (1, 10)

// END