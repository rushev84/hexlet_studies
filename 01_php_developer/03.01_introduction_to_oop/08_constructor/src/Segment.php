<?php

namespace App;

// BEGIN (write your solution here)

class Segment
{
    public $beginPoint;
    public $endPoint;

    public function __construct(Point $beginPoint, Point $endPoint)
    {
        $this->beginPoint = $beginPoint;
        $this->endPoint = $endPoint;
    }
}

// END
