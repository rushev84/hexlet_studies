<?php

namespace App\Points;

function makePoint($x, $y)
{
    return [
        'angle' => atan2($y, $x),
        'radius' => sqrt($x ** 2 + $y ** 2)
    ];
}

// BEGIN (write your solution here)
function _getX(array $point): int
{
    return $point['radius'] * cos($point['angle']);
}

function _getY(array $point): int
{
    return $point['radius'] * sin($point['angle']);
}
// END


$x = 4;
$y = 8;

// $point хранит в себе данные в полярной системе координат
$point = makePoint($x, $y);

//var_dump($point);

// Здесь происходит преобразование из полярной в декартову
//var_dump(getX($point)); // 4
//var_dump(getY($point)); // 8


// Решение учителя
// Да, нельзя обращаться напрямую к свойствам вот так: $point['radius'].
// Вместо этого нужно делать всё через вспомогательные функции (чтобы не была видна их реализация): getRadius($point).

function getAngle($point)
{
    return $point['angle'];
}

function getRadius($point)
{
    return $point['radius'];
}

function getX($point)
{
    return getRadius($point) * cos(getAngle($point));
}

function getY($point)
{
    return getRadius($point) * sin(getAngle($point));
}