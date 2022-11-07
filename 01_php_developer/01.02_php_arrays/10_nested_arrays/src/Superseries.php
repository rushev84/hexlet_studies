<?php

namespace App\Superseries;

// BEGIN (write your solution here)
function _getSuperSeriesWinner(array $scores)
{
    $result = 0;
    foreach ($scores as $game) {
        $result += $game[0] <=> $game[1];
    }
    if ($result > 0) {
        return 'canada';
    } elseif ($result < 0) {
        return 'ussr';
    } else {
        return null;
    }
}

// END

$scores = [
    [3, 2],
    [4, 1],
    [5, 8],
    [5, 5],
    [2, 2],
    [2, 4],
    [4, 2],
    [2, 3],
];

var_dump(getSuperSeriesWinner($scores)); // 'canada'


// Решение учителя
// Можно избежать финального else

function getSuperSeriesWinner($scores)
{
    $result = 0;
    foreach ($scores as $score) {
        // $result = $result + ($score[0] <=> $score[1]);
        $result += $score[0] <=> $score[1];
    }

    if ($result > 0) {
        return 'canada';
    } elseif ($result < 0) {
        return 'ussr';
    }

    return null;
}