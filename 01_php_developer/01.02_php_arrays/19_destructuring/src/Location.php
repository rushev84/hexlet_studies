<?php

namespace App\Location;

function getDistance(array $point1, array $point2)
{
    [$x1, $y1] = $point1;
    [$x2, $y2] = $point2;

    $xs = $x2 - $x1;
    $ys = $y2 - $y1;

    return sqrt($xs ** 2 + $ys ** 2);
}

// BEGIN (write your solution here)
function _getTheNearestLocation(array $locations, array $point)
{
    if (empty($locations)) {
        return null;
    }

    [$nearestLocation] = $locations;
    [, $localPoint] = $nearestLocation;
    $minDistance = getDistance($localPoint, $point);

    foreach ($locations as $location) {
        [, $locationPoint] = $location;
        $distance = getDistance($locationPoint, $point);

        if ($distance < $minDistance) {
            $minDistance = $distance;
            $nearestLocation = $location;
        }
    }

    return $nearestLocation;
}
// END


$locations = [
    ['Park', [10, 5]],
    ['Sea', [1, 3]],
    ['Museum', [8, 4]],
];

$point = [5, 5];

// Если точек нет, то возвращается null
var_dump(getTheNearestLocation([], $point)); // null

//var_dump(getTheNearestLocation($locations, $point)); // ['Museum', [8, 4]]

// Решение учителя
// Один-в-один, только имена переменных получше

function getTheNearestLocation(array $locations, array $currentPoint)
{
    if (empty($locations)) {
        return null;
    }

    [$nearestLocation] = $locations;
    [, $nearestPoint] = $nearestLocation;
    $lowestDistance = getDistance($currentPoint, $nearestPoint);

    foreach ($locations as $location) {
        [, $point] = $location;
        $distance = getDistance($currentPoint, $point);

        if ($distance < $lowestDistance) {
            $lowestDistance = $distance;
            $nearestLocation = $location;
        }
    }

    return $nearestLocation;
}