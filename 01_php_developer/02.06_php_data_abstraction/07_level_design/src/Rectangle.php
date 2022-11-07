<?php

namespace App\Rectangle;

require_once 'Points.php';

use function App\Points\makeDecartPoint;
use function App\Points\getX;
use function App\Points\getY;
use function App\Points\getQuadrant;

// BEGIN (write your solution here)
function makeRectangle(array $startPoint, int $width, int $height): array
{
    return [
        'startPoint' => $startPoint,
        'width' => $width,
        'height' => $height
    ];
}

function getStartPoint(array $rectangle): array
{
    return $rectangle['startPoint'];
}

function getWidth(array $rectangle): int
{
    return $rectangle['width'];
}

function getHeight(array $rectangle): int
{
    return $rectangle['height'];
}


function _containsOrigin(array $rectangle): bool
{
    $startPoint = getStartPoint($rectangle);
    $points = [
        'point1' => $startPoint,
        'point2' => makeDecartPoint(getX($startPoint) + getWidth($rectangle), getY($startPoint)),
        'point3' => makeDecartPoint(getX($startPoint) + getWidth($rectangle), getY($startPoint) - getHeight($rectangle)),
        'point4' => makeDecartPoint(getX($startPoint), getY($startPoint) - getHeight($rectangle)),
    ];

    $quadrants = [];
    foreach ($points as $point) {
        $quadrant = getQuadrant($point);
        if (in_array($quadrant, $quadrants)) {
            return false;
        }
        $quadrants[] = $quadrant;
    }

    return true;
}

// END

// Создание прямоугольника:
// p - левая верхняя точка
// 4 - ширина
// 5 - высота
//
// p    4
// -----------
// |         |
// |         | 5
// |         |
// -----------

$p = makeDecartPoint(0, 1);
$rectangle = makeRectangle($p, 4, 5);

var_dump(containsOrigin($rectangle)); // false

$rectangle2 = makeRectangle(makeDecartPoint(-4, 3), 5, 4);
var_dump(containsOrigin($rectangle2)); // true

// Решение учителя
// Алгоритм значительно проще. Создаём две точки - первая равна стартовой, а вторая - по диагонали от стартовой. Теперь если 1 точка лежит во 2 квадранте и одновременно 2 точка лежит в 4 квадранте, это автоматически означает, что центр координат находится внутри прямоугольника. Во всех других случаях он снаружи либо на границе.

function containsOrigin($rectangle)
{
    $point1 = getStartPoint($rectangle);
    $point2 = makeDecartPoint(getX($point1) + getWidth($rectangle), getY($point1) - getHeight($rectangle));
    return getQuadrant($point1) === 2 && getQuadrant($point2) === 4;
}