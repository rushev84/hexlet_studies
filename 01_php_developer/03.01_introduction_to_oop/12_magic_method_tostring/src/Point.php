<?php

namespace App;

// BEGIN (write your solution here)
class Point
{
    private $x;
    private $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function __toString()
    {
        return "({$this->x}, {$this->y})";
    }
}
// END
