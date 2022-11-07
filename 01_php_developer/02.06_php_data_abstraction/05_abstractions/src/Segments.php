<?php


namespace App\Segments;

require_once 'Points.php';

use function App\Points\makeDecartPoint;
use function App\Points\getX;
use function App\Points\getY;

// BEGIN (write your solution here)
function _makeSegment(array $point1, array $point2): array
{
    return [
        'beginPoint' => $point1,
        'endPoint' => $point2
    ];
}

function _getMidpointOfSegment(array $segment): array
{
    $midX = (getX($segment['beginPoint']) + getX($segment['endPoint'])) / 2;
    $midY = (getY($segment['beginPoint']) + getY($segment['endPoint'])) / 2;
    return makeDecartPoint($midX, $midY);
}

function _getBeginPoint(array $segment): array
{
    return makeDecartPoint(getX($segment['beginPoint']), getY($segment['beginPoint']));
}

function _getEndPoint(array $segment): array
{
    return makeDecartPoint(getX($segment['endPoint']), getY($segment['endPoint']));
}
// END


//src\Segments.php
//Реализуйте указанные ниже функции:
//
//makeSegment(). Принимает на вход две точки и возвращает отрезок.
//getMidpointOfSegment(). Принимает на вход отрезок и возвращает точку находящуюся на середине отрезка.
//getBeginPoint(). Принимает на вход отрезок и возвращает точку начала отрезка.
//getEndPoint(). Принимает на вход отрезок и возвращает точку конца отрезка.
//<?php

$segment = makeSegment(makeDecartPoint(3, 2), makeDecartPoint(0, 0));

//var_dump(getMidpointOfSegment($segment)); // (1.5, 1)
//var_dump(getBeginPoint($segment)); // (3, 2)
var_dump(getEndPoint($segment)); // (0, 0)


// Решение учителя. Всё попроще:

function makeSegment($point1, $point2)
{
    return ['beginPoint' => $point1, 'endPoint' => $point2];
}

function getBeginPoint($segment)
{
    return $segment['beginPoint'];
}

function getEndPoint($segment)
{
    return $segment['endPoint'];
}

function getMidpointOfSegment($segment)
{
    $beginPoint = getBeginPoint($segment);
    $endPoint = getEndPoint($segment);

    $x = (getX($beginPoint) + getX($endPoint)) / 2;
    $y = (getY($beginPoint) + getY($endPoint)) / 2;

    return makeDecartPoint($x, $y);
}