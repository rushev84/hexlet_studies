<?php

// Реализуйте функцию dup, которая клонирует переданную точку. Под клонированием подразумевается процесс создания нового объекта, с такими же данными как и у старого.

class Point
{
    public $x;
    public $y;
}

function dup(Point $point)
{
    $clonePoint = new Point();
    $clonePoint->x = $point->x;
    $clonePoint->y = $point->y;

    return $clonePoint;
}