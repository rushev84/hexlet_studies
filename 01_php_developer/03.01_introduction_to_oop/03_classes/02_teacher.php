<?php

class Point
{
    public $x;
    public $y;
}

function getMidpoint($point1, $point2)
{
    $x = ($point1->x + $point2->x) / 2;
    $y = ($point1->y + $point2->y) / 2;

    $point = new Point();
    $point->x = $x;
    $point->y = $y;
    return $point;
}