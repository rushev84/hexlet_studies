<?php

class Point
{
    public $x;
    public $y;
}

function dup(Point $point)
{
    $clonedPoint = new Point();
    $clonedPoint->x = $point->x;
    $clonedPoint->y = $point->y;

    return $clonedPoint;
}